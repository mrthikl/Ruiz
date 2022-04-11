@extends('home-layout');
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
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
        <div class="row  product-details-inner">
            <div class="col-lg-5 col-md-6">
                <div class="product-large-slider">
                    <div class="pro-large-img img-zoom">
                        <img src="{{asset('uploads/product/'.$detail_product->product_image)}}" alt="{{$detail_product->product_image}}" />
                        <a href="{{asset('uploads/product/'.$detail_product->product_image)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h3>{{$detail_product->product_name}}</h3>

                        <div class="price-box">
                            <span class="new-price">${{$detail_product->product_price}}</span>
                        </div>
                        <p>Brand: {{$detail_product->brand_name}}</p>
                        <p>Category: {{$detail_product->category_name}}</p>
                        <p>{{$detail_product->product_content}}</p>

                        <div class="single-add-to-cart">
                            <form action="{{URL::to('/save-cart')}}" method="post" class="cart-quantity d-flex">
                                @csrf
                                <div class="quantity">
                                    <div class="cart-plus-minus">
                                        <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                    </div>
                                </div>
                                <input type="hidden" name="product_id" value="{{$detail_product->product_id}}">
                                <button class="add-to-cart" type="submit">Add To Cart</button>
                            </form>
                        </div>
                        <ul class="single-add-actions">
                            <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li>
                            <li class="add-to-compare">
                                <div class="compare-button"><a href="compare.html"><i class="icon-refresh"></i> Compare</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-description-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul role="tablist" class="nav">
                            <li class="active" role="presentation">
                                <a data-toggle="tab" role="tab" href="#description" class="active">Description</a>
                            </li>
                            <li role="presentation">
                                <a data-toggle="tab" role="tab" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product_details_tab_content tab-content">
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                            <div class="product_description_wrap  mt-30">
                                <div class="product_desc mb-30">
                                    <p>{{$detail_product->product_desc}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                            <div class="review_address_inner mt-30">
                                <!-- Start Single Review -->
                                <div class="pro_review">
                                    <div class="review_thumb">
                                        <img alt="review images" src="images/other/reviewer-60x60.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info mb-10">
                                            <ul class="product-rating d-flex mb-10">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <h5>Admin - <span> November 19, 2019</span></h5>

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating_wrap mt-50">
                                <h5 class="rating-title-1">Add a review </h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <h6 class="rating-title-2">Your Rating</h6>
                                <div class="rating_list">
                                    <div class="review_info mb-10">
                                        <ul class="product-rating d-flex mb-10">
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="#" class="comment-form-area">
                                            <div class="row comment-input">
                                                <div class="col-md-6 comment-form-author mt-15">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="Name">
                                                </div>
                                                <div class="col-md-6 comment-form-email mt-15">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email">
                                                </div>
                                            </div>
                                            <div class="comment-form-comment mt-15">
                                                <label>Comment</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </div>
                                            <div class="comment-form-submit mt-15">
                                                <input type="submit" value="Submit" class="comment-submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div>

        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3> Related Product</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                @foreach ($list_products->take(8) as $pro)
                <div class="col-lg-12" style="max-height:400px">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                <img class="primary-image" src="{{asset('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
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

        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Upsell Products</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4">
                @foreach ($list_products_new->take(8) as $pro)
                <div class="col-lg-12" style="max-height:400px">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="{{URL::to('detail-product/'.$pro->product_id)}}">
                                <img class="primary-image" src="{{asset('uploads/product/'.$pro->product_image)}}" alt="{{$pro->product_image}}">
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
<!-- main-content-wrap end -->
@endsection