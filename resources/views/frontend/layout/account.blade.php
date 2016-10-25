 <!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />


		@include('frontend/layout/parts/default-styles')
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('header_styles')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="{!! asset('/frontend/important.css') !!}">
		<link rel="stylesheet" href="{!! asset('/frontend/css/responsive.css') !!}" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<script type="text/javascript" src="{!! asset('/jquery-2.0.3.min.js') !!}"></script>
	<!-- Document Title 	============================================= -->
	<title>@yield('title', 'Secure User Account Area')</title>

</head>
<body class=" @yield('bodytag') stretched">
    <div id="wrapper" class="clearfix">

	    <!-- Header ============================================= -->
	    @include('frontend/layout/partials/header/header',[$cart,$total,$user,$userinfo])

		@yield('content')
		<!-- Footer ============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				@include('frontend.layout.partials.footer.footer-widgets')
			</div>
			<!-- Copyrights ============================================= -->
			<div id="copyrights">
				@include('frontend.layout.partials.footer.copyr')
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->
    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
@include('frontend/layout/parts/default-scripts')
</body>
</html>
