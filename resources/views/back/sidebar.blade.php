<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{url('/assets/images/faces/face8.jpg')}}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{Auth::user()->name}}</p>
                    <p class="designation">مدیریت سایت</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">منوی اصلی</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">کنترل پنل</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title"> <i class="fa fa-file" style="margin-left: 5px"></i>صفحات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.users')}}"><i class="fas fa-users" style="margin-left: 5px"></i>کاربران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.categories')}}"><i class="fa fa-th-list" style="margin-left: 5px"></i>دسته بندی ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.articles')}}"><i class="fa fa-product-hunt" style="margin-left: 5px"></i>مطالب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.comments')}}"><i class="fa fa-comments" style="margin-left: 5px"></i>نظرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.sliders')}}"><i class="fa fa-sliders" style="margin-left: 5px"></i>اسلایدر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.footers')}}"><i class="fa fa-address-card" style="margin-left: 5px"></i>فوتر</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('admin.contacts')}}"><i class="fa fa-commenting" style="margin-left: 5px"></i>پیام ها--}}
{{--                            <span class="count" style="background-color: #a90707;padding: 5%;border-radius: 100%"><strong>{{$count}}</strong></span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator"  href="{{route('admin.contacts')}}"  aria-expanded="false"><i class="fa fa-commenting" style="font-size:13px" ></i>پیام ها
                            <span class="count">{{$count}}</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.tests')}}"><i class="fa fa-address-card" style="margin-left: 5px"></i>test</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pages/forms/basic_elements.html')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">المانهای فرم</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pages/charts/chartjs.html')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">نمودارها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{'/pages/tables/basic-table.html'}}">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">جدولها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/pages/icons/font-awesome.html')}}">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">آیکونها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">صفحات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/pages/samples/blank-page.html')}}"> صفحه ی خالی </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/pages/samples/login.html')}}"> ورود </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html"> ثبت نام </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
