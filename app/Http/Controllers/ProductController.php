<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    public function list_products()
    {
        $list_products = Product::join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->orderby('products.product_id', 'desc')
            ->get();
        $list_categories = Category::orderby('category_id', 'desc')->get();
        $list_brands = Brand::orderby('brand_id', 'desc')->get();
        return view('admin.list-products', compact('list_categories', 'list_brands', 'list_products'));
    }
    public function add_product(Request $request)
    {
        $data = new Product;
        $data->product_name = $request->product_name;
        $data->product_price = $request->product_price;
        $data->product_content = $request->product_content;
        $data->category_id = $request->product_cate;
        $data->brand_id = $request->product_brand;
        $data->product_desc = $request->product_desc;
        $data->product_status = $request->product_status;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/product', $new_image);
            $data->product_image = $new_image;
        } else {
            $data->product_image = '';
        }
        $data->save();
        return Redirect::to('/list-products');
    }
    public function delete_product($product_id)
    {
        Product::find($product_id)->delete();
        return Redirect::to('/list-products');
    }
    public function update_product(Request $request)
    {
        $product_id = $request->input('product_id');
        $data = Product::find($product_id);
        $data->product_name = $request->product_name;
        $data->product_price = $request->product_price;
        $data->product_desc = $request->product_desc;
        $data->product_content = $request->product_content;
        $data->category_id = $request->product_cate;
        $data->brand_id = $request->product_brand;
        $data->product_desc = $request->product_desc;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/product', $new_image);
            $data->product_image = $new_image;
        }
        $data->save();
        return Redirect::to('/list-products');
    }
    public function active_product($product_id)
    {
        Product::find($product_id)->update(['product_status' => 1]);
        return Redirect::to('/list-products');
    }
    public function unactive_product($product_id)
    {
        Product::find($product_id)->update(['product_status' => 0]);
        return Redirect::to('/list-products');
    }
}
