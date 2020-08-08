@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">منوی کاربری</a></li>
                <li class="active">پروفایل</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->


    <!-- section -->
<div class="container" style="text-align: center">
    <div class="row" dir="rtl">
        <form id="checkout-form" class="clearfix" action="{{route('profile-update',$user->id)}}" method="post">
            @csrf
            <div class="col-md-6">
                <div class="billing-details">
                    <p>Already a customer ? <a href="#">Login</a></p>
                    <div class="section-title">
                        <h3 class="title">Billing Details</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="password_confirmation" placeholder="password confirmation">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="phone" value="{{$user->phone}}">
                    </div>
                    <button class="primary-btn" type="submit">Edit</button>
                </div>
            </div>


        </form>
    </div>
</div>


@endsection
