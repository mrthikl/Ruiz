@extends('home-layout')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Cart Page</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb cart-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                    <th class="plantmore-product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartCollection as $cart)
                                <tr>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img src="{{asset('/uploads/product/'.$cart->attributes->image)}}" alt="" style="max-height: 100px;"></a></td>
                                    <td class="plantmore-product-name"><a href="#">{{$cart->name}}</a></td>
                                    <td class="plantmore-product-price"><span class="amount">${{number_format($cart->price)}}</span></td>
                                    <td class="plantmore-product-quantity">
                                        <input type="number" class="input-number" min="1" name="quantity" id="" value="{{$cart->quantity}}">
                                    </td>
                                    <td class="product-subtotal"><span class="amount">
                                            @php
                                            $subtotal = $cart->quantity * $cart->price;
                                            echo '$'.number_format($subtotal, 0);
                                            @endphp
                                        </span></td>
                                    <td class="plantmore-product-remove"><a href="{{URL::to('/delete-cart').'/'.$cart->id}}"><i class="fa fa-times"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="coupon-all">

                                <div class="coupon2">
                                    <a href="{{URL::to('/shop')}}" class=" continue-btn">Continue Shopping</a>
                                </div>

                                <div class="coupon">
                                    <h3>Coupon</h3>
                                    <p>Enter your coupon code if you have one.</p>
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>${{number_format(Cart::getSubTotal(), 0)}}</span></li>
                                    <li>Tax <span>${{number_format($tax->getCalculatedValue(Cart::getSubTotal()),0)}}</span></li>
                                    <li>Total <span>
                                            @php
                                            $total = Cart::getSubTotal() + $tax->getCalculatedValue(Cart::getSubTotal());
                                            echo '$'.number_format($total, 0);
                                            @endphp
                                        </span></li>
                                </ul>
                                <a href="{{URL::to('/checkout')}}" class="proceed-checkout-btn">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
@endsection