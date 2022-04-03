<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function __construct(){
    //     $list_products = Product::where('product_status', '0')->orderby('product_id', 'desc')->get();
    //     $list_categories = Category::where('category_status', '0')->orderby('category_id', 'desc')->get();
    //     $list_brands = Brand::where('brand_status', '0')->orderby('brand_id', 'desc')->get();
    // }
    public function index()
    {
        // $list_products = Product::join('categories', 'categories.category_id', '=', 'products.category_id')
        //     ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
        //     ->orderby('products.product_id', 'desc')
        //     ->get();
        $list_products = Product::where('product_status', '0')->orderby('product_id', 'desc')->get();
        $list_categories = Category::where('category_status', '0')->orderby('category_id', 'desc')->get();
        $list_brands = Brand::where('brand_status', '0')->orderby('brand_id', 'desc')->get();
        return view('pages.home', compact('list_categories', 'list_brands', 'list_products'));
    }

    public function shop()
    {
        $list_products = Product::where('product_status', '0')->orderby('product_id', 'desc')->get();
        $list_categories = Category::where('category_status', '0')->orderby('category_id', 'desc')->get();
        $list_brands = Brand::where('brand_status', '0')->orderby('brand_id', 'desc')->get();
        return view('pages.shop', compact('list_categories', 'list_brands', 'list_products'));
    }


}
