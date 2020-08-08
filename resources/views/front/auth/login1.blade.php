@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">منوی کاربری</a></li>
                <li class="active">ورود</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="container" style="text-align: center">
        <div class="row" dir="rtl" style="padding-left: 30%;padding-right: 30%;margin-top: 10%;margin-bottom: 10%">
            <form id="checkout-form" class="clearfix" action="{{route('login')}}" method="post">
                @csrf

                <div class="col-md-12" dir="rtl">
                    <div class="billing-details">
                        <p></p>
                        <div class="section-title">
                            <h3 class="title">ورود به حساب کاربری</h3>
                        </div>

                        <div class="form-group">
                            <input class="input" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="password" placeholder="Password">
                        </div>
                        <button class="primary-btn">ورود</button>
                        {{--                    <button  type="submit">login</button>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
