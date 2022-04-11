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
                    <li class="breadcrumb-item active">Payment</li>
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
        </div>
        <!-- checkout-details-wrapper end -->
    </div>
</div>
<!-- main-content-wrap end -->
@endsection