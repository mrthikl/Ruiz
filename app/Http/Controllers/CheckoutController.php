<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
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
        return view('pages.checkout', compact('cartCollection', 'tax'));
    }
    public function save_checkout(Request $request){
        // shipping
        $shipping_data = array();
        $shipping_data['shipping_name'] = $request->shipping_name;
        $shipping_data['shipping_email'] = $request->shipping_email;
        $shipping_data['shipping_address'] = $request->shipping_address;
        $shipping_data['shipping_phone'] = $request->shipping_phone;
        $shipping_data['shipping_message'] = $request->shipping_message;
        $shipping_data['payment_method'] = $request->payment_option;
        $shipping_id = Shipping::insertGetId($shipping_data);
        Session::put('shipping_id', $shipping_id);

        // Order
        $order_data = array();
        $order_data['user_id'] = Session::get('user_id');
        $order_data['shipping_id'] = Session::get('shipping_id')  ;
        $order_data['order_total'] = Cart::getTotal();
        $order_id = Order::insertGetId($order_data);

        // Order Detail
        $cartCollection = Cart::getContent();
        foreach($cartCollection as $cart) {
            $order_detail_data = array();
            $order_detail_data['order_id']= $order_id;
            $order_detail_data['product_id'] = $cart->id;
            $order_detail_data['product_name'] = $cart->name;
            $order_detail_data['product_price'] = $cart->price;
            $order_detail_data['product_sales_quantity'] = $cart->quantity;
            OrderDetail::insert($order_detail_data);
        }
        Cart::clear();
        return Redirect::to('/payment');
    }
    public function payment() {
        return view('pages.payment');
    }
}
