<footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container" dir="rtl">
        <!-- row -->
        <div class="row">
            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a class="logo" href="#">
                            <img src="{{url('/img/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /footer logo -->

                        <span> <i style="font-size:20px" class="fa">&#xf21d;</i>{!! $footer->body !!}</span>
                    <!-- footer social -->
                    <br>
                    <br>
                    <ul class="footer-social" >
                        <li><a href="#"><i class="fa fa-facebook ft" ></i ></a></li>
                        <li><a href="#"><i class="fa fa-twitter ft" ></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram ft"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus ft"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest ft"></i></a></li>
                        <li ></li>
                    </ul>
                    <!-- /footer social -->
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">حساب کاربری من</h3>
                    <ul class="list-links">
                        <li><a href="#">حساب کاربری من</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <div class="clearfix visible-sm visible-xs"></div>

            <!-- footer widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">خدمات مشتریان</h3>
                    <ul class="list-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shiping & Return</a></li>
                        <li><a href="#">Shiping Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer widget -->

            <!-- footer subscribe -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="footer">
                    <h3 class="footer-header">ارتباط با ما</h3>
                    <p>با وارد کردن ایمیل خود اولین نفری باشید که از اخبار و رویدادهای ما با خبر می شوید</p>
                    <form action="{{route('email-list')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="input" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group" dir="ltr">
                            <input name="A" type="text" value="{{$A}}" hidden>
                            <input name="B" type="text" value="{{$B}}"hidden>
                            <label style="font-size: large;">{{$A}} + {{$B}} =</label>
                            <input class="input rounded" type="text" name="sum" style="width: 70%;margin-right: 20px;height: 30px;background: white;color: black;">
                        </div>
                        <button class="primary-btn">ارسال</button>

                    </form>
                </div>
            </div>
            <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr>
        <!-- row -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                   <script>document.write(new Date().getFullYear());</script><i class="fa fa-heart-o" aria-hidden="true"></i><strong style="color: darkgrey"> تمامی حقوق سایت متعلق به نیکان سیستم می باشد.</strong> <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </div>
                <!-- /footer copyright -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
