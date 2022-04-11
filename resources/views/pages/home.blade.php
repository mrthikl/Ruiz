@extends('home-layout')
@section('content')
<!-- Hero Section Start -->
<div class="hero-slider hero-slider-one">

    <!-- Single Slide Start -->
    <div class="single-slide" style="background-image: url({{('frontend/images/slider/slide-bg-2.jpg')}})">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="slider-content-text text-left">
                        <h5>Exclusive Offer -20% Off This Week</h5>
                        <h1>H-Vault Classico</h1>
                        <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                        <p>Starting At <strong>$1.499.00</strong></p>
                        <div class="slide-btn-group">
                            <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <!-- Single Slide End -->

    <!-- Single Slide Start -->
    <div class="single-slide" style="background-image: url({{('frontend/images/slider/slide-bg-1.jpg')}})">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="slider-content-text text-left">
                        <h5>Exclusive Offer -20% Off This Week</h5>
                        <h1>H-Vault Classico</h1>
                        <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                        <p>Starting At <strong>$1.499.00</strong></p>
                        <div class="slide-btn-group">
                            <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <!-- Single Slide End -->

</div>
<!-- Hero Section End -->

<!-- Banner Area Start -->
<div class="banner-area section-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="{{('frontend/images/banner/banner-01.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6  col-md-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="{{('frontend/images/banner/banner-02.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Product Area Start -->
<div class="product-area section-pb section-pt-30">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>Best seller products</h4>
                </div>
            </div>
        </div>

        <div class="row product-active-lg-4">
            @foreach ($list_products->take(8) as $pro)
            <div class="col-lg-12">
                <!-- single-product-area start -->
                <div class="single-product-area mt-30">
                    <div class="product-thumb">
                        <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                            <img class="primary-image" src="{{('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                        </a>
                        <div class="label-product label_new">New</div>
                        <form action="{{URL::to('/save-cart')}}" method="post" class=" action-links">
                            @csrf
                            <input type="hidden" class="input-text" name="quantity" value="1" title="Qty">
                            <input type="hidden" name="product_id" value="{{$pro->product_id}}">
                            <button type="submit" class="cart-btn" type="submit"><i class="icon-basket-loaded"></i></button>
                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                        </form>
                    </div>
                    <div class="product-caption">
                        <h4 class="product-name"><a href="{{URL::to('detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                        <div class="price-box">
                            <span class="new-price">${{$pro->product_price}}</span>



                        </div>
                    </div>
                </div>
                <!-- single-product-area end -->
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Banner Area Start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="{{('frontend/images/banner/banner-03.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6  col-md-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="{{('frontend/images/banner/banner-04.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->


<!-- Product Area Start -->
<div class="product-area section-pb section-pt-30">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <ul class="nav product-tab-menu" role="tablist">
                    <li class="product-tab-item nav-item active">
                        <a class="product-tab__link nav-link active" id="nav-featured-tab" data-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">Featured</a>
                    </li>
                    <li class="product-tab__item nav-item">
                        <a class="product-tab__link nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-selected="false">New Arrivals</a>
                    </li>
                    <li class="product-tab__item nav-item">
                        <a class="product-tab__link nav-link" id="nav-bestseller-tab" data-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">Bestseller</a>
                    </li>
                    <li class="product-tab__item nav-item">
                        <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">On Sale</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="tab-content product-tab__content" id="product-tabContent">
            <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                <div class="product-carousel-group">

                    <div class="row product-active-row-4">
                        @foreach ($list_products as $pro)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                        <img class="primary-image" src="{{('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <form action="{{URL::to('/save-cart')}}" method="post" class=" action-links">
                                        @csrf
                                        <input type="hidden" class="input-text" name="quantity" value="1" title="Qty">
                                        <input type="hidden" name="product_id" value="{{$pro->product_id}}">
                                        <button type="submit" class="cart-btn" type="submit"><i class="icon-basket-loaded"></i></button>
                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </form>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="{{URL::to('detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">${{$pro->product_price}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="tab-pane fade" id="nav-new" role="tabpanel">
                <div class="product-carousel-group">

                    <div class="row product-active-row-4">
                        @foreach ($list_products as $pro)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                        <img class="primary-image" src="{{('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <form action="{{URL::to('/save-cart')}}" method="post" class=" action-links">
                                        @csrf
                                        <input type="hidden" class="input-text" name="quantity" value="1" title="Qty">
                                        <input type="hidden" name="product_id" value="{{$pro->product_id}}">
                                        <button type="submit" class="cart-btn" type="submit"><i class="icon-basket-loaded"></i></button>
                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </form>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="{{URL::to('detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">$ {{number_format($pro->product_price)}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                <div class="product-carousel-group">

                    <div class="row product-active-row-4">
                        @foreach ($list_products as $pro)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                        <img class="primary-image" src="{{('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <form action="{{URL::to('/save-cart')}}" method="post" class=" action-links">
                                        @csrf
                                        <input type="hidden" class="input-text" name="quantity" value="1" title="Qty">
                                        <input type="hidden" name="product_id" value="{{$pro->product_id}}">
                                        <button type="submit" class="cart-btn" type="submit"><i class="icon-basket-loaded"></i></button>
                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </form>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="{{URL::to('detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">${{$pro->product_price}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                <div class="product-carousel-group">

                    <div class="row product-active-row-4">
                        @foreach ($list_products as $pro)
                        <div class="col-lg-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                        <img class="primary-image" src="{{('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                    </a>
                                    <div class="label-product label_new">New</div>
                                    <form action="{{URL::to('/save-cart')}}" method="post" class=" action-links">
                                        @csrf
                                        <input type="hidden" class="input-text" name="quantity" value="1" title="Qty">
                                        <input type="hidden" name="product_id" value="{{$pro->product_id}}">
                                        <button type="submit" class="cart-btn" type="submit"><i class="icon-basket-loaded"></i></button>
                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                    </form>
                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="{{URL::to('detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">${{$pro->product_price}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Product Area End -->

<!-- letast blog area Start -->
<div class="letast-blog-area section-pb">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="singel-latest-blog">
                    <div class="aritcles-content">
                        <div class="author-name">
                            post by: <a href="#"> Author Name</a> - 30 Oct 2019
                        </div>
                        <h4><a href="blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                    </div>
                    <div class="articles-image">
                        <a href="blog-details.html">
                            <img src="{{('frontend/images/blog/blog-01.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="singel-latest-blog">
                    <div class="aritcles-content">
                        <div class="author-name">
                            post by: <a href="#"> Author Name</a> - 20 Oct 2019
                        </div>
                        <h4><a href="blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                    </div>
                    <div class="articles-image">
                        <a href="blog-details.html">
                            <img src="{{('frontend/images/blog/blog-02.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="singel-latest-blog">
                    <div class="aritcles-content">
                        <div class="author-name">
                            post by: <a href="#"> Author Name</a> - 13 Oct 2019
                        </div>
                        <a href="blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                    </div>
                    <div class="articles-image">
                        <a href="blog-details.html">
                            <img src="{{('frontend/images/blog/blog-03.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- letast blog area End -->

<!-- our-brand-area start -->
<div class="our-brand-area section-pb">
    <div class="container">
        <div class="row our-brand-active">
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
            <div class="brand-single-item">
                <a href="#"><img src="{{('frontend/images/brand/brand-01.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!-- our-brand-area end -->

<div class="newletter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newletter-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12">
                            <div class="newsletter-title mb-30">
                                <h3>Join Our <br><span>Newsletter Now</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7">
                            <div class="newsletter-footer mb-30">
                                <input type="text" placeholder="Your email address...">
                                <div class="subscribe-button">
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection