<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function authAdmin()
    {
        $id = Session::get('id');
        if ($id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function index()
    {
        return view('admin-login');
    }
    public function show_dashboard()
    {
        $this->authAdmin();
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = Hash::check('password', $request->password);
        $result = User::where('email', $email)
            ->where('password', $password)
            ->where('is_admin', '=', '1')
            ->first();

        if ($result) {
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            Session::put('is_admin', $result->is_admin);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'incorrect email or password');
            return Redirect::to('/admin');
        }
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Session::put('name', null);
        Session::put('id', null);
        Session::put('is_admin', null);
        return Redirect::to('/admin');
    }
}
