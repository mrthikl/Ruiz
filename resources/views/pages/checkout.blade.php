@extends('home-layout')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout Page</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb checkout-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="coupon-area">
                    <!-- coupon-accordion start -->
                    <div class="coupon-accordion">
                        <h3>Have a coupon? <span class="coupon" id="showcoupon">Click here to enter your code</span></h3>
                        <div class="coupon-content" id="checkout-coupon">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon code">
                                        <button type="submit" class="btn button-apply-coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- coupon-accordion end -->
                </div>
            </div>
        </div>
        <!-- checkout-details-wrapper start -->
        <div class="checkout-details-wrapper">
            <form action="{{URL::to('/save-checkout')}}" method="post">
                @csrf;
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- billing-details-wrap start -->
                        <div class="billing-details-wrap">

                            <h3 class="shoping-checkboxt-title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="single-form-row">
                                        <label>name <span class="required">*</span></label>
                                        <input type="text" name="shipping_name" value="{{Session::get('user_name')}}">
                                    </p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="single-form-row">
                                        <label>email <span class="required">*</span></label>
                                        <input type="text" name="shipping_email" value="{{Session::get('user_email')}}">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>address <span class="required">*</span></label>
                                        <input type="text" placeholder="House number and street name" name="shipping_address" value="{{Session::get('user_address')}}">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Phone</label>
                                        <input type="text" name="shipping_phone" value="{{Session::get('user_phone')}}">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Message</label>
                                        <textarea rows="5" type="text" name="shipping_message" value="" placeholder="Message"></textarea>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- billing-details-wrap end -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- your-order-wrapper start -->
                        <div class="your-order-wrapper">
                            <h3 class="shoping-checkboxt-title">Your Order</h3>
                            <!-- your-order-wrap start-->
                            <div class="your-order-wrap">
                                <!-- your-order-table start -->
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cartCollection as $cart)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{$cart->name}}<strong class="product-quantity"> × {{$cart->quantity}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">
                                                        @php
                                                        $subtotal = $cart->quantity * $cart->price;
                                                        echo '$'.number_format($subtotal);
                                                        @endphp
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">${{number_format(Cart::getSubTotal())}}</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Cart Tax</th>
                                                <td><span class="amount">${{$tax->getCalculatedValue(Cart::getSubTotal())}}</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">
                                                            @php
                                                            $total = Cart::getSubTotal() - $tax->getCalculatedValue(Cart::getSubTotal());
                                                            echo $total;
                                                            @endphp
                                                        </span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- your-order-table end -->

                                <!-- your-order-wrap end -->
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <!-- ACCORDION START -->
                                        <h5>Direct Bank Transfer</h5>
                                        <div class="payment-content">
                                            <label style="display:flex"><input type="checkbox" name="payment_option" value="Bank Transfer" style="margin-top:5px"> <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p></label>
                                        </div>
                                        <!-- ACCORDION END -->
                                        <!-- ACCORDION START -->
                                        <h5>Cheque Payment</h5>
                                        <div class="payment-content">
                                        <label style="display:flex"><input type="checkbox" name="payment_option" value="Cheque Payment" style="margin-top:5px"> <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p></label>
                                        </div>
                                        <!-- ACCORDION END -->
                                        <!-- ACCORDION START -->
                                        <h5>PayPal</h5>
                                        <div class="payment-content">
                                        <label style="display:flex"><input type="checkbox" name="payment_option" value="PayPal" style="margin-top:5px"><p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p></label>
                                        </div>
                                        <!-- ACCORDION END -->
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="Place order" />
                                    </div>
                                </div>
                                <!-- your-order-wrapper start -->

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- checkout-details-wrapper end -->
    </div>
</div>
<!-- main-content-wrap end -->
@endsection