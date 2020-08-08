<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bootstrap search box or search panel like amazon.com"/>
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="Satyendra Kumar Singh"/>
	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <!-- Font Awesome Icon -->
{{--    <link rel="stylesheet" href="{{url('/front/css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" href="{{url('/font-awesome/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{url('/front/css/app.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" type="text/css" href="http://font.limil.org/traffic.min.css"/>
          <link rel="stylesheet" type="text/css" href="http://font.limil.org/elham-traffic.min.css"/>
          <link rel="stylesheet" type="text/css" href="http://font.limil.org/elham-koodak.min.css"/>
          <link rel="stylesheet" type="text/css" href="http://font.limil.org/bardiya.min.css"/>
		<![endif]-->
    {!! htmlScriptTagJsApi(['lang'=>'en']) !!}
<style>

</style>


</head>

<body>
	<!-- HEADER -->
@include('front.header')
	<!-- /NAVIGATION -->


	<!-- section -->
	<div class="section" >
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
                @yield('content')
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
@include('front.footer')
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
    <script src="{{url('/front/js/app.js')}}"></script>

</body>

</html>
