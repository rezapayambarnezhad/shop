<header>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <ul class="header-top-links">

                    <li class="dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">فا <i
                                class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">فارسی (فا)</a></li>
                            <li><a href="#">English (ENG)</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="#">
                        <img src="{{url('/img/logo.png')}}" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form action="{{route('search')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="input search-input" type="text" placeholder="کلمه مورد نظر را وارد کنید"
                                   name="search">
                            <select class="input search-categories" name="category">
                                <option value="0">همه دسته ها</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- /Search -->
            </div>
            <div class="pull-right" dir="rtl">
                <ul class="header-btns">
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            @auth()
                                <strong class="text-uppercase"> {{Auth::user()->name}} <i class="fa fa-caret-down"></i></strong>
                            @else
                                <strong class="text-uppercase"> منوی کاربری <i class="fa fa-caret-down"></i></strong>
                            @endauth
                        </div>
                        @auth()
                            <form id="myForm" action="{{route('logout')}}" method="post">
                                @csrf
                                <a href="#" onclick="myFunction()"> خروج </a>
                                {{--                                    <button class="btn btn-link" type="submit"><a href="#"><i class="fa fa-check"></i> خروج </a></button>--}}
                            </form>
                        @else
                            <a href="{{route('login')}}" class="text-uppercase">ورود</a> / <a
                                href="{{route('register')}}" class="text-uppercase">ثبت نام</a>
                        @endauth
                        {{--                        <a href="{{route('login')}}" class="text-uppercase">ورود</a> / <a href="{{route('register')}}" class="text-uppercase">ثبت نام</a>--}}
                        <ul class="custom-menu">
                            @auth()
                                <li><a href="#"><i class="fa fa-user-o"></i> پنل کاربری </a></li>
                                <li><a href="{{route('admin.index')}}"><i class="fa fa-user-circle-o"></i> پنل
                                        مدیریت</a></li>
                                {{--                            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>--}}
                                <li>
                                    <form id="myForm" action="{{route('logout')}}" method="post">
                                        @csrf
                                        <a href="#" onclick="myFunction()"><i style="color: #1ac0ac ;margin-right: 10%"
                                                                              class="fa fa-check"></i> خروج </a>
                                    </form>
                                </li>

                            @else

                                <li><a href="{{route('login')}}"><i class="fa fa-unlock-alt"></i> ورود</a></li>
                                <li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> ثبت نام </a></li>
                            @endauth

                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
{{--    <div id="top-header" style="margin-bottom: 0">--}}
{{--        <div class="container">--}}
{{--            <div class="pull-left">--}}
{{--                <!-- Search -->--}}
{{--                            <div class="header-search">--}}
{{--                                <form action="{{route('search')}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="input search-input" type="text" placeholder="کلمه مورد نظر را وارد کنید"--}}
{{--                                               name="search">--}}
{{--                                        <select class="input search-categories" name="category">--}}
{{--                                            <option value="0">همه دسته ها</option>--}}
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                        <button class="search-btn"><i class="fa fa-search"></i></button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--            <!-- /Search -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>
<!-- /HEADER -->
{{--<div id="hideDiv">--}}
    @include('back.massage')
{{--</div>--}}

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <a href="#"><span class="category-header">دسته بندی ها <i class="fa fa-list"></i></span></a>
                <ul class="category-list" dir="rtl">
                    @foreach($categories as $category)
                        <li><a href="{{route('category',$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
{{--                    <li class="dropdown side-dropdown">--}}
{{--                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i--}}
{{--                                class="fa fa-angle-right"></i></a>--}}
{{--                        <div class="custom-menu">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="hidden-md hidden-lg">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <hr class="hidden-md hidden-lg">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <hr>--}}
{{--                                    <ul class="list-links">--}}
{{--                                        <li>--}}
{{--                                            <h3 class="list-links-title">Categories</h3></li>--}}
{{--                                        <li><a href="#">Women’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Men’s Clothing</a></li>--}}
{{--                                        <li><a href="#">Phones & Accessories</a></li>--}}
{{--                                        <li><a href="#">Jewelry & Watches</a></li>--}}
{{--                                        <li><a href="#">Bags & Shoes</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li><a href="#">Bags & Shoes</a></li>--}}
{{--                    <li><a href="#">View All</a></li>--}}
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav" dir="rtl">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{route('main')}}">خانه</a></li>
{{--                    <li><a href="{{route('categories')}}">دسته بندی ها</a></li>--}}
{{--                    <li class="dropdown default-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"--}}
{{--                                                             aria-expanded="true">منوی کاربری <i--}}
{{--                                class="fa fa-caret-down"></i></a>--}}
{{--                        <ul class="custom-menu">--}}

{{--                            @auth()--}}
{{--                                <li><a href="{{route('profile',auth::user()->id)}}">پنل کاربری</a></li>--}}
{{--                                @if(auth::user()->role== 1)--}}
{{--                                    <li><a href="{{route('admin.index')}}">پنل مدیریت</a></li>--}}
{{--                                @endif--}}
{{--                                <li>--}}
{{--                                    <form action="{{route('logout')}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button class="btn btn-link" type="submit">خروج</button>--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            @else--}}
{{--                                <li><a href="{{route('register')}}">ثبت نام</a></li>--}}
{{--                                <li><a href="{{route('login')}}">ورود</a></li>--}}
{{--                                --}}{{--                            <li><a href="checkout.html">پروفایل</a></li>--}}
{{--                            @endauth--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{route('articles')}}">مطالب</a></li>
                    <li><a href="{{route('contact')}}">تماس با ما</a></li>
                    <li><a href="{{route('about')}}">درباره ما</a></li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<script>
    function myFunction() {
        document.getElementById("myForm").submit();
    }
</script>
