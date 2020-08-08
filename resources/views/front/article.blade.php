@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" style="margin-bottom: 5%">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">منوی کاربری</a></li>
                <li class="#">مطالب</li>
                <li class="active">{{$article->name}}</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->


    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="container">
                    <div class="product product-details clearfix" dir="rtl">
                        <div class="col-md-6">
                            <div id="product-main-view">
                                <div class="product-view">

                                    <img src="{{$article->image}}" alt="">
                                </div>
                            </div>
                            <div id="product-view">
                                <div class="product-view">
                                    <img src="{{$article->image}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-body">
                                <div class="product-label">
                                    <span>جدید</span>
                                    <span class="sale">-{{$article->off_price}}%</span>
                                </div>
                                <h2 class="product-name">{{$article->name}}</h2>
                                <h3 class="product-price">${{$article->suggest_price}}
                                    <del class="product-old-price">${{$article->main_price}}</del>
                                </h3>
                                <div>
                                    <div class="product-rating" style="margin-right: 0">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                    <a href="#"> نظر شما </a>
                                </div>
                                @foreach($article->categories()->get() as $category)
                                    <p><strong>دسته بندی:</strong> {{$category->name}}/</p>
                                @endforeach
                                <p><strong>برند:</strong> {{$article->name}}</p>
                                <p>{!! $article->desc !!}</p>
                                <div class="product-options">
                                    <ul class="size-option">
                                        <li><span class="text-uppercase">Size:</span></li>
                                        <li class="active"><a href="#">S</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">SL</a></li>
                                    </ul>
                                    <ul class="color-option">
                                        <li><span class="text-uppercase">Color:</span></li>
                                        <li class="active"><a href="#" style="background-color:#475984;"></a></li>
                                        <li><a href="#" style="background-color:#8A2454;"></a></li>
                                        <li><a href="#" style="background-color:#BF6989;"></a></li>
                                        <li><a href="#" style="background-color:#9A54D8;"></a></li>
                                    </ul>
                                </div>

                                <div class="product-btns">
                                    <div class="qty-input">
                                        <span class="text-uppercase">QTY: </span>
                                        <input class="input" type="number">
                                    </div>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to
                                        Cart
                                    </button>
                                    <div class="pull-right">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" dir="rtl">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active" style="margin-left: 2%"><a data-toggle="tab" href="#tab1">توضیحات</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab1">مشخصات</a></li>
                            <li><a data-toggle="tab" href="#tab2">نظرات</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <p>{!! $article->desc !!}</p>
                            </div>
                            <div id="tab2" class="tab-pane fade in">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-reviews" dir="rtl">
                                            <h4 class="text-uppercase">نظر خود را بنویسید</h4>
                                            <p>آدرس ایمیل شما منتشر نخواهد شد.</p>
                                            <form class="review-form" action="{{route('comment.store',$article->id)}}"
                                                  method="post" style="margin-bottom: 2%">
                                                @csrf
                                                @auth()
                                                    <div class="form-group">
                                                        <input class="input" type="text" name="name"
                                                               placeholder="Name & Family"
                                                               value="{{Auth::user()->name}}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="input" type="text" name="email"
                                                               placeholder="Email" value="{{Auth::user()->email}}"
                                                               readonly>
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <input class="input" type="text" name="name"
                                                               placeholder="Name & Family">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="input" type="text" name="email"
                                                               placeholder="Email">
                                                    </div>
                                                @endauth
                                                <div class="form-group">
                                                    <textarea class="input" name="body"
                                                              placeholder="Your review"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-rating">
                                                        <strong class="text-uppercase">Your Rating: </strong>
                                                        <div class="stars">
                                                            <input type="radio" id="star5" name="rating"
                                                                   value="5"/><label for="star5"></label>
                                                            <input type="radio" id="star4" name="rating"
                                                                   value="4"/><label for="star4"></label>
                                                            <input type="radio" id="star3" name="rating"
                                                                   value="3"/><label for="star3"></label>
                                                            <input type="radio" id="star2" name="rating"
                                                                   value="2"/><label for="star2"></label>
                                                            <input type="radio" id="star1" name="rating"
                                                                   value="1"/><label for="star1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-group" for="recaptcha">تصویر امنیتی</label>
                                                    {!! htmlFormSnippet() !!}
                                                </div>
                                                <button class="primary-btn">ثبت</button>
                                            </form>
                                            @foreach($comments as $comment)
                                                <div class="single-review ">

                                                    <div class="review-heading">
                                                        <div><a href="#"><i class="fa fa-user-o"></i> {{$comment->name}}
                                                            </a></div>
                                                        <div><a href="#"><i
                                                                    class="fa fa-clock-o"></i>{{$comment->created_at}}
                                                            </a></div>

                                                    </div>
                                                    <div class="review-body">
                                                        <p>{!!$comment->body!!} </p>
                                                    </div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                    <br>
                                                    <hr style="margin-top: 5%">
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /section -->
    <!-- section -->
    <div class="section" dir="rtl">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12" dir="rtl">
                        <div class="section-title">
                            <h2 class="title">مطالب مرتبط</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
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

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>New</span>
                                </div>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="./img/product03.jpg" alt="">
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
                </div>
                <!-- section title -->

{{--                <!-- Product Single -->--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-6">--}}
{{--                    <div class="product product-single">--}}
{{--                        <div class="product-thumb">--}}
{{--                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>--}}
{{--                            <img src="./img/product04.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                            <h3 class="product-price">$32.50</h3>--}}
{{--                            <div class="product-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-o empty"></i>--}}
{{--                            </div>--}}
{{--                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                            <div class="product-btns">--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>--}}
{{--                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Product Single -->--}}

{{--                <!-- Product Single -->--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-6">--}}
{{--                    <div class="product product-single">--}}
{{--                        <div class="product-thumb">--}}
{{--                            <div class="product-label">--}}
{{--                                <span>New</span>--}}
{{--                            </div>--}}
{{--                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>--}}
{{--                            <img src="./img/product03.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                            <h3 class="product-price">$32.50</h3>--}}
{{--                            <div class="product-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-o empty"></i>--}}
{{--                            </div>--}}
{{--                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                            <div class="product-btns">--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>--}}
{{--                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Product Single -->--}}

{{--                <!-- Product Single -->--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-6">--}}
{{--                    <div class="product product-single">--}}
{{--                        <div class="product-thumb">--}}
{{--                            <div class="product-label">--}}
{{--                                <span class="sale">-20%</span>--}}
{{--                            </div>--}}
{{--                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>--}}
{{--                            <img src="./img/product02.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                            <h3 class="product-price">$32.50--}}
{{--                                <del class="product-old-price">$45.00</del>--}}
{{--                            </h3>--}}
{{--                            <div class="product-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-o empty"></i>--}}
{{--                            </div>--}}
{{--                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                            <div class="product-btns">--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>--}}
{{--                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Product Single -->--}}

{{--                <!-- Product Single -->--}}
{{--                <div class="col-md-3 col-sm-6 col-xs-6">--}}
{{--                    <div class="product product-single">--}}
{{--                        <div class="product-thumb">--}}
{{--                            <div class="product-label">--}}
{{--                                <span>New</span>--}}
{{--                                <span class="sale">-20%</span>--}}
{{--                            </div>--}}
{{--                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>--}}
{{--                            <img src="./img/product01.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="product-body">--}}
{{--                            <h3 class="product-price">$32.50--}}
{{--                                <del class="product-old-price">$45.00</del>--}}
{{--                            </h3>--}}
{{--                            <div class="product-rating">--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star"></i>--}}
{{--                                <i class="fa fa-star-o empty"></i>--}}
{{--                            </div>--}}
{{--                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>--}}
{{--                            <div class="product-btns">--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>--}}
{{--                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>--}}
{{--                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- /Product Single -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection
