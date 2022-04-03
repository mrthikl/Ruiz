<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list_brands()
    {
        $list_brands = Brand::orderby('brand_id', 'desc')->get();
        return view('admin.list-brands',compact('list_brands'));
    }
    public function add_brand(Request $request)
    {
        
        $data = new Brand;
        $data->brand_name = $request->brand_name;
        $data->brand_desc = $request->brand_desc;
        $data->brand_status = $request->brand_status;
        $data->save();
        return Redirect::to('/list-brands');
    }
    public function delete_brand($brand_id)
    {
        Brand::where('brand_id', $brand_id)->delete();
        return Redirect::to('/list-brands');
    }
    public function update_brand(Request $request) {
        $brand_id = $request->input('brand_id');
        $data = Brand::find($brand_id);
        $data->brand_name = $request->brand_name;
        $data->brand_desc = $request->brand_desc;
        $data->save();
        return Redirect::to('/list-brands');
    }
    public function active_brand($brand_id)
    {
        Brand::find($brand_id)->update(['brand_status' => 1]);
        return Redirect::to('/list-brands');
    }
    public function unactive_brand($brand_id)
    {
        Brand::find($brand_id)->update(['brand_status' => 0]);
        return Redirect::to('/list-brands');
    }
    // home
    public function brand_product($brand_id)
    {
        $list_categories = Category::where('category_status', '0')->orderby('category_id', 'desc')->get();
        $list_brands = Brand::where('brand_status', '0')->orderby('brand_id', 'desc')->get();
        $list_products = Product::join('brands', 'products.category_id', '=', 'brands.brand_id')
            ->where('products.brand_id', $brand_id)
            ->get();
        return view('pages.shop', compact('list_categories', 'list_brands', 'list_products'));
    }
}
