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
                    <li class="breadcrumb-item active">Shop left sidebar</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <!-- shop-sidebar-wrap start -->
                <div class="shop-sidebar-wrap">
                    <div class="shop-box-area">

                        <!--sidebar-categores-box start  -->
                        <div class="sidebar-categores-box shop-sidebar mb-30">
                            <h4 class="title">Brands</h4>
                            <!-- category-sub-menu start -->
                            <div class="category-sub-menu">
                                <ul>
                                    @foreach ($list_brands as $brand)
                                    <li><a href="{{URL::to('/shop/brand/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- category-sub-menu end -->
                        </div>
                        <!--sidebar-categores-box end  -->

                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb-30">
                            <h4 class="title">Filter By Price</h4>
                            <!-- filter-price-content start -->
                            <div class="filter-price-content">
                                <form action="#" method="post">
                                    <div id="price-slider" class="price-slider"></div>
                                    <div class="filter-price-wapper">

                                        <a class="add-to-cart-button" href="#">
                                            <span>FILTER</span>
                                        </a>
                                        <div class="filter-price-cont">

                                            <span>Price:</span>
                                            <div class="input-type">
                                                <input type="text" id="min-price" readonly="" />
                                            </div>
                                            <span>—</span>
                                            <div class="input-type">
                                                <input type="text" id="max-price" readonly="" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- filter-price-content end -->
                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                </div>
                <!-- shop-sidebar-wrap end -->
            </div>
            <div class="col-lg-9 order-lg-2 order-1">

                <!-- shop-product-wrapper start -->
                <div class="shop-product-wrapper">
                    <div class="row align-itmes-center">
                        <div class="col">
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <!-- product-view-mode start -->

                                <div class="product-mode">
                                    <!--shop-item-filter-list-->
                                    <ul class="nav shop-item-filter-list" role="tablist">
                                        <li class="active"><a class="active grid-view" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-view-mode end -->
                                <!-- product-short start -->
                                <div class="product-short">
                                    <p>Sort By :</p>
                                    <select class="nice-select" name="sortby">
                                        <option value="trending">Relevance</option>
                                        <option value="sales">Name(A - Z)</option>
                                        <option value="sales">Name(Z - A)</option>
                                        <option value="rating">Price(Low > High)</option>
                                        <option value="date">Rating(Lowest)</option>
                                    </select>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                        </div>
                    </div>

                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid">
                                <div class="shop-product-wrap">
                                    <div class="row">
                                        @foreach($list_products->take(10) as $pro)
                                        <div class="col-lg-4 col-md-6">
                                            <!-- single-product-area start -->
                                            <div class="single-product-area mt-30">
                                                <div class="product-thumb">
                                                    <a href="{{URL::to('/detail-product/'.$pro->product_id)}}">
                                                        <img class="primary-image" src="{{asset('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
                                                    </a>
                                                    <div class="label-product label_new">New</div>
                                                    <div class="action-links">
                                                        <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                        <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <h4 class="product-name"><a href="{{URL::to('/detail-product/'.$pro->product_id)}}">{{$pro->product_name}}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">${{number_format($pro->product_price)}}</span>
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
                    <!-- shop-products-wrap end -->

                    <!-- paginatoin-area start -->
                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="pagination-box">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a class="Next" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->
@endsection