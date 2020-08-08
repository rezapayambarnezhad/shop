@extends('front.base')
@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb" dir="rtl">
                <li><a href="#">خانه</a></li>
                <li class="active">درباره ما</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="container" style="text-align: center;margin-top: 5%">

        <div class="row" dir="rtl">
            <img src="{{url('img/logo1.png')}}">
        </div>

    </div>

    <div class="container" style="margin-bottom: 5%;margin-top: 5%">
        <div class="row col-md-12">
            <div class="col-md-6 col-xl-6 pull-left">
                <div class="card mb-3" style="max-width: 540px;float: right">
                    <div class="row no-gutters" dir="rtl">

                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">علی رضا شیبانی</h4>
                                <p class="card-text">مهندس شبکه و امنیت اطلاعات (کارشناس ارتباطات شبکه)</p>
                                <p class="card-text">مهندس کامپیوتر (نرم افزار) (پشتیبان نرم افزار)</p>
                                <p class="card-text">مهندس کامپیوتر (سخت افزار) (تکنسین سخت افزار و تعمیرات)</p>
                                <p class="card-text"><small class="text-muted">مدیر</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('img/admin2.jpg')}}" class="card-img"
                                 style="height: 150px;width: 150px;border-radius: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 pull-right">
                <div class="card mb-3" style="max-width: 540px;float: right">
                    <div class="row no-gutters" dir="rtl">

                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">سید رضا پیمبرنژاد</h4>
                                <p class="card-text">مهندس شبکه و امنیت اطلاعات (کارشناس ارتباطات شبکه)</p>
                                <p class="card-text">مهندس کامپیوتر (نرم افزار) (پشتیبان نرم افزار)</p>
                                <p class="card-text">مهندس کامپیوتر (سخت افزار) (تکنسین سخت افزار و تعمیرات)</p>
                                <p class="card-text"><small class="text-muted">مدیر</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('img/admin1.jpg')}}" class="card-img"
                                 style="height: 150px;width: 150px;border-radius: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container" style="margin-bottom: 10%">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                {{--                <div class="product product-details clearfix">--}}
                <div class="col-md-6">

                    <div dir="auto">
                        <img src="{{url('img/about1.jpg')}}" style="height: 400px;width: 500px">
                    </div>


                </div>
                <div class="col-md-6" dir="rtl">
                    <div class="product-body">
                        <h2 class="product-name">طراحی سایت</h2>
                        <h3 class="product-price">$$$$$$$$</h3>
                        <div>

                            <p>اعضای اصلی تیم طراحی سایت متشکل از طراحان خلاق و برنامه نویسان قوی و با تجربه است که هر
                                کدام از اعضای تیم از تحصیلات دانشگاهی کافی برخوردارند. این تیم دارای متخصصان طراحی سایت
                                و سئو با سابقه طولانی میباشد.

                                گرافیک طراحی وب سایت ها بر اساس گرافیک مدرن روز دنیا می باشد، تمامی کارهای طراحی سایت
                                آراکد دارای استانداردهای لازم جهت بالابردن سطح کیفیت پروژه های شما می باشد. تمامی کارهای
                                حرفه ای طراحی سایت آراکد با توجه به خواسته های مشتری و پس از مشاوره های اولیه جهت رضایت
                                مشتری از گرافیک سایت انجام می شود.

                                طراحی فوق العاده بر اساس سبک های مدرن جهانی انجام می شود. پنج سال سابقه در طراحی باعث
                                شده سایت های شخصی، تجاری، طراحی رابط های کاربری، سایت های فروشگاهی، مشاوره تبلیغات و
                                بهینه سازی صاحبان وب سایت به ما اعتماد کنند و پیاده سازی کسب و کار مجازی خود را به ما
                                بسپارند.</p>


                        </div>
                    </div>
                </div>
                <!-- /Product Details -->
            {{--            </div>--}}
            <!-- /row -->
            </div>
            <!-- /container -->
        </div>

        <div class="container" style="margin-bottom: 10%">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="product product-details clearfix">
                    <div class="col-md-6" dir="rtl">
                        <div class="product-body">
                            <h2 class="product-name">پشتیبانی شبکه های کامپیوتری</h2>
                            <h3 class="product-price">---------------</h3>
                            <div>
                                <p>با تیم کار آزموده و تلاش برای گسترش تکنولوژی IT و به همچنین به منظور ارتقای سطح کیفی
                                    و کمی خدمات خود سعی می نماید با بهره گیری ازکارشناسان مجرب و کار آزموده و با تکیه
                                    برسال ها تجربه در زمینه خدمات پشتیبانی شبکه و کامپیوتر، فعالیت خود را درعرصه فناوری
                                    اطلاعات همواره دنبال نماید. فعالیت ما در زمینه سخت افزار، نرم افزار و شبکه می باشد و
                                    در همین راستا با شرکت ها و نهاد ها و سازمانهای بسیاری در طول این سالها همکاری داشته
                                    و با ارائه خدمات مشاوره و پیاده سازی پروژه های شبکه و دیتا سنتر ، اتوماسیون و سرویس
                                    و نگهداری تجربه بسیار بزرگی را کسب نموده است.

                                    عمده فعالیت این شرکت در زمینه پشتیبانی شبکه و پشتیبانی کامپیوتر میباشد. که بیش از ۱۳
                                    سال در این زمینه سابقه کاری دارد و در این مدت با بسیاری از شرکت ها و موسسات تجاری ،
                                    بازرگانی ، تولیدی ، کارخانجات و … قرارداد همکاری داشته و تجربه کسب نموده است. همچنین
                                    رایان پشتیبان در زمینه ارائه خدمات شبکه و نصب و راه اندازی شبکه نیز فعالیت دارد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" dir="rtl">
                        <div class="product-body">
                            <div class="product-view">
                                <img src="{{url('img/about2.jpg')}}" style="height: 400px;width: 500px">
                            </div>

                        </div>
                    </div>
                    <!-- /Product Details -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

        <div class="container" style="margin-bottom: 10%">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div class="product-body">
                            <div class="product-view">
                                <img src="{{url('img/about3.png')}}" style="height: 400px;width: 500px">
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6" dir="rtl">
                        <div class="product-body">
                            <h2 class="product-name">خرید و فروش و مشاوره</h2>
                            <h3 class="product-price">نرم افزار / سخت افزار</h3>
                            <div>

                                <p>انتخاب مناسب ترين گزينه سخت افزاری و نرم افزاری از بين تعداد بيشماری از محصولات موجود
                                    در بازار و بررسی تطابق کارايی محصول با نيازهای سازمانی و شرکتی عموماً تحت تاثير
                                    تبليغات و کمتر با بررسي فنی صورت می پذيرد. روشهای مبتنی بر سعی و خطا در انتخاب محصول
                                    گاهاً نتيجه چندان مناسبی را به دست نداده و علاوه بر زمان از دست رفته، هزينه های
                                    ناخواسته ای را به شما تحميل مينمايد.

                                    انتخاب تجهيزات خاص از قبيل سيستم ها و تجهيزات کامپيوتری، تجهيزات شبکه در زمره
                                    امکانات سخت افزاری و نرم افزاری هستند که هزينه اوليه بالائی را به سازمانها تحميل می
                                    کنند، لذا انتخاب آنها بايستی با دقت بسيار بالائی صورت پذيرفته تا از هدر رفت منابع
                                    پيشگيری گردد.

                                    کلینیک یار با اتکا به سالها تجربه اجرائی قادر به ارائه خدمات مشاوره ای در خصوص تامین
                                    تجهیزات و سیستمهای سخت افزاری و نرم افزاری به شما عزیزان می باشد.

                                    شما مي توانيد برای بحث،مشاوره و تبادل نظر پيرامون خريد قطعات کامپيوتری موجود در
                                    بازار،لپ تاپ،گوشی همراه و تبلت و همچنين تامين انواع سخت افزار اعم از (pc , ups ,
                                    تجهيزات شبکه : passive & active و اقلام مصرفی ) با خيالی راحت با ما انتخابی درست
                                    انجام دهيد.

                                    واحد سخت‌افزار کلینیک یار، با در اختيــار داشتن متخصصـين کارآمد و پرتلاش، وظيفه
                                    پشتيبـــانی فنی از تجهــيزات رايانه‌ای را برعهـــده دارد همچنيــن اين واحـــد با
                                    انجــام ده‌ها پروژه‌ی کوچک و بـزرگ، سهم به سزايی از فعاليت‌های جاری را به خـود
                                    اختصاص داده است. </p>


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
    </div>


@endsection
