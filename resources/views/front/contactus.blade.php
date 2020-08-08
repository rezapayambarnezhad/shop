@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">خانه</a></li>
                <li class="active">تماس با ما</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="container">

                <img src="{{url('img/contactus.jpg')}}" style="width: 100%;height: 400px">
    </div>


    <!-- section -->
    <div class="section" style="margin-top: 10%" >
        <!-- container -->
        <div class="container" style="margin-bottom: 10%">
            <!-- row -->
            <div class="row">
            @include('back.massage')
                <!--  Product Details -->
                    <div class="col-md-6" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3468.136391743495!2d52.52252431544451!3d29.62878164504242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDM3JzQzLjYiTiA1MsKwMzEnMjkuMCJF!5e0!3m2!1sen!2s!4v1594058446218!5m2!1sen!2s"  frameborder="0" style="border:0;width: 100%;height: 400px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>


                    <div class="col-md-6" dir="rtl" >
                        <div dir=rtl>

                            <form class="review-form" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input class="input" type="text" name="name" placeholder="Name & Family">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="input" name="body" placeholder="Your review"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group" for="recaptcha">تصویر امنیتی</label>
                                    {!! htmlFormSnippet() !!}
                                </div>
                                <button class="submit-btn">ثبت</button>
                            </form>
                        </div>

                    </div>
            </div>
        </div>
    </div>

@endsection
