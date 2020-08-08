@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">خانه</a></li>
                <li class="active">جستجو</li>
            </ul>
        </div>
    </div>

    <!-- section -->
    <div class="section" dir="rtl">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Shop by:</h3>
                        <ul class="filter-list">
                            <li><span class="text-uppercase">color:</span></li>
                            <li><a href="#" style="color:#FFF; background-color:#8A2454;">Camelot</a></li>
                            <li><a href="#" style="color:#FFF; background-color:#475984;">East Bay</a></li>
                            <li><a href="#" style="color:#FFF; background-color:#BF6989;">Tapestry</a></li>
                            <li><a href="#" style="color:#FFF; background-color:#9A54D8;">Medium Purple</a></li>
                        </ul>

                        <ul class="filter-list">
                            <li><span class="text-uppercase">Size:</span></li>
                            <li><a href="#">X</a></li>
                            <li><a href="#">XL</a></li>
                        </ul>

                        <ul class="filter-list">
                            <li><span class="text-uppercase">Price:</span></li>
                            <li><a href="#">MIN: $20.00</a></li>
                            <li><a href="#">MAX: $120.00</a></li>
                        </ul>

                        <ul class="filter-list">
                            <li><span class="text-uppercase">Gender:</span></li>
                            <li><a href="#">Men</a></li>
                        </ul>

                        <button class="primary-btn">Clear All</button>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Price</h3>
                        <div id="price-slider"></div>
                    </div>
                    <!-- aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter By Color:</h3>
                        <ul class="color-option">
                            <li><a href="#" style="background-color:#475984;"></a></li>
                            <li><a href="#" style="background-color:#8A2454;"></a></li>
                            <li class="active"><a href="#" style="background-color:#BF6989;"></a></li>
                            <li><a href="#" style="background-color:#9A54D8;"></a></li>
                            <li><a href="#" style="background-color:#675F52;"></a></li>
                            <li><a href="#" style="background-color:#050505;"></a></li>
                            <li><a href="#" style="background-color:#D5B47B;"></a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter By Size:</h3>
                        <ul class="size-option">
                            <li class="active"><a href="#">S</a></li>
                            <li class="active"><a href="#">XL</a></li>
                            <li><a href="#">SL</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Brand</h3>
                        <ul class="list-links">
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Polo</a></li>
                            <li><a href="#">Lacost</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Filter by Gender</h3>
                        <ul class="list-links">
                            <li class="active"><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>
                    </div>
                    <!-- /aside widget -->

                    <!-- aside widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top Rated Product</h3>
                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="./img/thumb-product01.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->

                        <!-- widget product -->
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="./img/thumb-product01.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /widget product -->
                    </div>
                    <!-- /aside widget -->
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-9">
                    <div class="store-filter clearfix">
                        <div class="pull-right">
                            <div class="page-filter">
                                <h3 style="margin-top: 13px;margin-bottom: 0px">نتیجه جستجو</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- STORE -->
                    <div id="store"  >
                        <!-- row -->
                        <div class="row"  >
                            <!-- Product Single -->
                                @foreach($result as $article)
                                    @if(stristr($article->name,$search))
                                        <div class="col-md-12 col-sm-9 col-xs-9" >
                                            <div class="product product-single">
                                                <div class="product-thumb" style="float: right;margin-left: 10%">
                                                    <div class="product-label">
                                                        <span>جدید</span>
                                                        <span class="sale">-{{$article->off_price}}%</span>
                                                    </div>
                                                    <a href="{{route('article',$article->id)}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> نمایش</a>
                                                    <img src="<?php echo '/storage/photos/1/'.basename($article->image) ?> " alt="" style="height: 200px;width: 200px">
                                                </div>

                                                <div class="product-body">

                                                    <h3 class="product-price">${{$article->suggest_price}} <del class="product-old-price">${{$article->main_price}}</del></h3>
                                                    <h2 class="product-name"><a href="{{route('article',$article->id)}}">نام:{{$article->name}}</a></h2>

                                                    <div style="text-align: right">
                                                        @foreach($article->categories()->get() as $category)
                                                            <h2 class="product-name">دسته:{{$category->name}}/</h2>
                                                        @endforeach
                                                        <h4 class="product-name">{!! jdate($article->created_at)->format('%Y-%m-%d') !!}</h4>
                                                        <h4 class="product-name"><a href="#"><?php echo mb_substr(strip_tags( $article->desc),1,10,'UTF8'). '...' ?></a></h4>
                                                    </div>

                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div><br>


                                                    <div class="product-btns" >

                                                        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>خرید</button>
                                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            <!-- /Product Single -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /STORE -->

                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection
