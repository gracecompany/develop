<!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema')>
<head>

	@yield('jsonschema')
	<title>@yield('title', 'The Grace Company')</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
	@yield('seo')


	@yield('goodrelations')
	<!-- Stylesheets ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

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
	@yield('scripts')
	@yield('ppscripts')
	<!-- Document Title ============================================= -->
	{{--
	<title>{!! $settings['site_title'] or " The Grace Company | Machine Quilting Frames | Hand Quilting Frames | Rotary Cutters" !!}</title>
	--}}

<script type="text/javascript" src="{!! asset('/jquery-2.0.3.min.js') !!}"></script>

	@include('frontend/layout/parts/ua')

</head>
<body class=" @yield('bodytag') stretched" @yield('bodyschema')>
<div id="wrapper" class="clearfix">
	@include('frontend.layout.partials.header.top-bar')
	@include('frontend.layout.partials.header.header')
	@yield('submenu')
	@yield('slider')
	@yield('intro')
	@yield('page-title')
	{{-- @yield('left-sidebar') --}}
	@yield('content')
	<!-- Footer =============================================-->
	<footer id="footer" class="dark">
		<div class="container">
			@include('frontend.layout.partials.footer.footer-widgets')
		</div>
		<!-- Copyrights ============================================= -->
		<div id="copyrights">
			@include('frontend.layout.partials.footer.copyr')
		</div>
		<!-- #copyrights end -->
	</footer>
	<!-- #footer end -->
</div>
<!-- #wrapper end -->
<!-- Go To Top ============================================= -->

<div id="gotoTop" class="icon-angle-up"></div>

@include('frontend/layout/parts/default-scripts')

@yield('footer_scripts')
@yield('pp_footer_scripts')
@yield('inlinejs')
</body>
</html>