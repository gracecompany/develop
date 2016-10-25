 <!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema')>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="The Grace Company" />
	@yield('seo')
{{-- 	@include('frontend/layout/parts/meta') --}}
{{-- 	@include('frontend/layout/parts/og') --}}
{{-- 	@include('frontend/layout/parts/twitter-meta') --}}
	@yield('json-ld')

<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "The Grace Company",
  "alternateName": "Grace Manufacturing",
  "url": "{!! url() !!}"
}
</script>


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
	<title>@yield('title', 'The Grace Company')</title>

	@include('frontend/layout/parts/ua')
</head>
<body class=" @yield('bodytag') stretched" @yield('bodyschema')>
    <div id="wrapper" class="clearfix">


	    @include('frontend/layout/partials/header/top-bar')
	    <!-- Header ============================================= -->
	    @include('frontend/layout/partials/header/header')
	   	{{-- @yield('header') --}}

	    @yield('submenu')
		@yield('slider')
		@yield('intro')
		@yield('page-title')
		@yield('sidebar')
	    <!-- Content ============================================= -->
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
