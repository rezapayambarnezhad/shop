@extends('front.base')
@section('content')
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    @foreach($sliders as $slider)
                        <div class="banner banner-1">
                            <img src="{{$slider->image}}" alt="" style="margin-left: 0;margin-right: 0 ">
                            <div class="banner-caption text-center">
                                <h1>{{$slider->text}}</h1>
                                {{--							<h3 class="white-color font-weak">Up to 50% Discount</h3>--}}
                                {{--							<button class="primary-btn">Shop Now</button>--}}
                            </div>
                        </div>
                    @endforeach
                <!-- /banner -->

                    {{--					<!-- banner -->--}}
                    {{--					<div class="banner banner-1">--}}
                    {{--						<img src="./img/banner02.jpg" alt="">--}}
                    {{--						<div class="banner-caption">--}}
                    {{--							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>--}}
                    {{--							<button class="primary-btn">Shop Now</button>--}}
                    {{--						</div>--}}
                    {{--					</div>--}}
                    {{--					<!-- /banner -->--}}

                    {{--					<!-- banner -->--}}
                    {{--					<div class="banner banner-1">--}}
                    {{--						<img src="./img/banner03.jpg" alt="">--}}
                    {{--						<div class="banner-caption">--}}
                    {{--							<h1 class="white-color">New Product <span>Collection</span></h1>--}}
                    {{--							<button class="primary-btn">Shop Now</button>--}}
                    {{--						</div>--}}
                    {{--					</div>--}}
                    {{--					<!-- /banner -->--}}
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner10.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6" >
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner11.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner12.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <div class="col-md-12" dir="rtl">
                    <div class="section-title">
                        <h2 class="title">پیشنها ویزه</h2>
                        <div class="pull-left">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->
            {{--///////////////////////////////////////////////////////////////////////////////////////////////////////--}}
            <!-- banner -->
            {{--                @foreach($category->articles()->get() as $article)--}}
            {{--                    @if($article->suggestion==1)--}}

            {{--                        <!-- Product Slick -->--}}
            {{--                            <div class="col-md-9 col-sm-6 col-xs-6">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div id="product-slick-1" class="product-slick">--}}
            {{--                                        <!-- Product Single -->--}}
            {{--                                        <div class="product product-single">--}}
            {{--                                            <div class="product-thumb">--}}
            {{--                                                <div class="product-label">--}}
            {{--                                                    <span>ویژه</span>--}}
            {{--                                                    <span class="sale">-{{$article->off_price}}%</span>--}}
            {{--                                                </div>--}}
            {{--                                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>--}}
            {{--                                                <img src="<?php echo '/storage/photos/1/thumbs/'.basename($article->image) ?>" alt="">--}}
            {{--                                            </div>--}}
            {{--                                            <div class="product-body">--}}
            {{--                                                <h3 class="product-price">${{$article->suggest_price}} <del class="product-old-price">${{$article->main_price}}</del></h3>--}}
            {{--                                                <div class="product-rating">--}}
            {{--                                                    <i class="fa fa-star"></i>--}}
            {{--                                                    <i class="fa fa-star"></i>--}}
            {{--                                                    <i class="fa fa-star"></i>--}}
            {{--                                                    <i class="fa fa-star"></i>--}}
            {{--                                                    <i class="fa fa-star-o empty"></i>--}}
            {{--                                                </div>--}}
            {{--                                                <h2 class="product-name"><a href="#">{{$article->name}}</a></h2>--}}
            {{--                                                <div class="product-btns">--}}
            {{--                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>--}}
            {{--                                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>--}}
            {{--                                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}
            {{--                                        <!-- /Product Single -->--}}
            {{--                                    @endif--}}
            {{--                                    @endforeach--}}
            <!-- /banner -->
            {{--///////////////////////////////////////////////////////////////////////////////////////////////////////--}}
            <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="./img/banner14.jpg" alt="">
                        <div class="banner-caption">
                            <h2 class="white-color">NEW<br>COLLECTION</h2>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">
                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>New</span>
                                        <span class="sale">-20%</span>
                                    </div>
                                    <ul class="product-countdown">
                                        <li><span>00 H</span></li>
                                        <li><span>00 M</span></li>
                                        <li><span>00 S</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product01.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span class="sale">-20%</span>
                                    </div>
                                    <ul class="product-countdown">
                                        <li><span>00 H</span></li>
                                        <li><span>00 M</span></li>
                                        <li><span>00 S</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product07.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->
                        {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                        @if($Products!=null)
                            @foreach($Products as $Product)
                                @if($Product->suggestion==1)
                                    <!-- Product Single -->
                                        <div class="product product-single">
                                            <div class="product-thumb">
                                                <div class="product-label">
                                                    <span>ویزه</span>
                                                    <span class="sale">-{{$Product->off_price}}%</span>
                                                </div>
                                                {{--                                    <ul class="product-countdown">--}}
                                                {{--                                        <li><span>00 H</span></li>--}}
                                                {{--                                        <li><span>00 M</span></li>--}}
                                                {{--                                        <li><span>00 S</span></li>--}}
                                                {{--                                    </ul>--}}
                                                <a href="{{route('article',$Product->id)}}" class="main-btn quick-view"><i
                                                        class="fa fa-search-plus"></i> Quick view</a>

                                                <img style="padding-bottom: 35%;padding-top: 35%"
                                                     src="<?php echo '/storage/photos/1/' . basename($Product->image) ?>"
                                                     alt="">


                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">${{$Product->suggest_price}}
                                                    <del class="product-old-price">${{$Product->main_price}}</del>
                                                </h3>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o empty"></i>
                                                </div>
                                                <h2 class="product-name"><a href="#">{{$Product->name}}</a></h2>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i>
                                                    </button>
                                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i>
                                                    </button>
                                                    <button class="primary-btn add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Product Single -->
                                @endif
                            @endforeach
                        @endif
                        {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                            --}}
                        <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>New</span>
                                        <span class="sale">-20%</span>
                                    </div>
                                    <ul class="product-countdown">
                                        <li><span>00 H</span></li>
                                        <li><span>00 M</span></li>
                                        <li><span>00 S</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product06.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>New</span>
                                        <span class="sale">-20%</span>
                                    </div>
                                    <ul class="product-countdown">
                                        <li><span>00 H</span></li>
                                        <li><span>00 M</span></li>
                                        <li><span>00 S</span></li>
                                    </ul>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product08.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->
                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12" dir="rtl">
                    <div class="section-title">
                        <h2 class="title">ویژه - استوک</h2>
                        <div class="pull-left">
                            <div class="product-slick-dots-2 custom-dots">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section title -->
            {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
            @if($Products!=null)
                @foreach($stoks as $stok)
                    @if($stok->suggestion==1)
                        <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>ویزه</span>
                                        <span class="sale">-{{$stok->off_price}}%</span>
                                    </div>
                                    {{--                                    <ul class="product-countdown">--}}
                                    {{--                                        <li><span>00 H</span></li>--}}
                                    {{--                                        <li><span>00 M</span></li>--}}
                                    {{--                                        <li><span>00 S</span></li>--}}
                                    {{--                                    </ul>--}}
                                    <a href="{{route('article',$stok->id)}}" class="main-btn quick-view"><i
                                            class="fa fa-search-plus"></i> Quick view</a>

                                    <img style="padding-bottom: 35%;padding-top: 35%"
                                         src="<?php echo '/storage/photos/1/' . basename($stok->image) ?>" alt="">


                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">${{$stok->suggest_price}}
                                        <del class="product-old-price">${{$stok->main_price}}</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">{{$stok->name}}</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->
                    @endif
                @endforeach
            @endif
            {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                            --}}
            <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single product-hot">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span class="sale">-20%</span>
                            </div>
                            <ul class="product-countdown">
                                <li><span>00 H</span></li>
                                <li><span>00 M</span></li>
                                <li><span>00 S</span></li>
                            </ul>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-2" class="product-slick">
                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product06.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50</h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span class="sale">-20%</span>
                                    </div>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product05.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product04.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50</h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                            <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>New</span>
                                        <span class="sale">-20%</span>
                                    </div>
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view
                                    </button>
                                    <img src="./img/product03.jpg" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">$32.50
                                        <del class="product-old-price">$45.00</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-8">
                    <div class="banner banner-1">
                        <img src="./img/banner13.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h1 class="primary-color">HOT DEAL<br><span
                                    class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner11.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-4 col-sm-6">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner12.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12" dir="rtl">
                    <div class="section-title">
                        <h2 class="title">جدید ترین ها</h2>
                    </div>
                </div>
                <!-- section title -->
            {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--}}

            @if($lasts!=null)
                @foreach($lasts as $last)
                    @if($last->suggestion==1)
                        <!-- Product Single -->
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>ویزه</span>
                                        <span class="sale">-{{$last->off_price}}%</span>
                                    </div>
                                    {{--                                    <ul class="product-countdown">--}}
                                    {{--                                        <li><span>00 H</span></li>--}}
                                    {{--                                        <li><span>00 M</span></li>--}}
                                    {{--                                        <li><span>00 S</span></li>--}}
                                    {{--                                    </ul>--}}
                                    <a href="{{route('article',$last->id)}}" class="main-btn quick-view"><i
                                            class="fa fa-search-plus"></i> Quick view</a>

                                    <img style="padding-bottom: 35%;padding-top: 35%"
                                         src="<?php echo '/storage/photos/1/' . basename($last->image) ?>" alt="">


                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">${{$last->suggest_price}}
                                        <del class="product-old-price">${{$last->main_price}}</del>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <h2 class="product-name"><a href="#">{{$last->name}}</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add
                                            to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Single -->
                    @endif
                @endforeach
            @endif



            {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                --}}
            <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product02.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product03.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product04.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="./img/banner15.jpg" alt="">
                        <div class="banner-caption">
                            <h2 class="white-color">NEW<br>COLLECTION</h2>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6" style="text-align: right">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product07.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product06.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->

                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product05.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">$32.50
                                <del class="product-old-price">$45.00</del>
                            </h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
            </div>
            <!-- /row -->

            <!-- row -->

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection
