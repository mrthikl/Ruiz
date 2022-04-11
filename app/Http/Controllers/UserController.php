<?php

namespace App\Http\Controllers;

use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class UserController extends Controller
{

    public function  login()
    {
        return view('pages.login');
    }
    public function  login_user(Request $request)
    {
        $email = $request->email;
        $password = Hash::check('password', $request->password);
        $result = User::where('email', $email)
            ->where('password', $password)
            ->first();

        if ($result) {
            Session::put('user_name', $result->name);
            Session::put('user_id', $result->id);
            Session::put('user_address', $result->address);
            Session::put('user_phone', $result->phone);
            Session::put('user_email', $result->email);
            return Redirect::to('/');
        } else {
            Session::put('message', 'incorrect email or password');
            return Redirect::to('/login');
        }
    }
    public function register_user(Request $request)
    {
  
        $result = new User;
        $result->name = $request->name;
        $result->email = $request->email;
        $result->password = Hash::make($request->password);
        $result->address = $request->address;
        $result->phone = $request->phone;
        $result->save();
        return Redirect::to('/login');
    }
    public function logout_user()
    {
        Session::flush();
        return Redirect::to('/');
    }
}
