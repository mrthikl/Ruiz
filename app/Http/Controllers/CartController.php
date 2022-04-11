<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {

        $taxCondition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'subtotal',
            'value' => '12.5%',
        ));
        Cart::condition($taxCondition);
        $tax = Cart::getCondition('VAT 12.5%');
        $cartCollection = Cart::getContent();
        return view('pages.cart', compact('cartCollection', 'tax'));
    }
    public function save_cart(Request $request)
    {

        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $product_info = Product::where('product_id', $product_id)->first();

        $data['id'] = $product_info->product_id;
        $data['name'] =  $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['quantity'] = $quantity;
        $data['attributes'] = array(
            'image' =>  $product_info->product_image,
        );

        $data['associatedModel'] = $product_info;
        Cart::add($data);
        return back();
    }
    public function delete_cart($cart_id)
    {
        Cart::remove($cart_id);
        return Redirect::to('/cart');
    }
    
}
