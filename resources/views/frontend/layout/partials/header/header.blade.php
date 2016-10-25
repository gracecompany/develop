
<header id="header" class="transparent-header semi-transparent dark full-header clearfix" data-sticky-class="dark" data-responsive-class="dark">
	<div id="header-wrap">
		<div class="container clearfix">
			<div id="primary-menu-trigger"> <i class="icon-reorder"></i>
			</div>
			<!-- Logo ============================================= -->
			<div id="logo">
				<a href="{!! url(getLang() . '/') !!}" class="standard-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}">
					<img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
				<a href="{!! url(getLang() . '/') !!}" class="retina-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}">
					<img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="GraceLogo"></a>
			</div>
			&nbsp;
			@if(!Sentinel::getUser())

			@include('frontend.account.partials.top-account')

			@endif
			<!-- #logo end -->
			<!-- Primary Navigation ============================================= -->

			{{-- {!! DB::table('products')->count(); !!} --}}
			<nav id="primary-menu">
				{{-- @include('frontend.layout.menu-cart',[$sections,$cart,$total]) --}}
				{{-- @include('frontend.layout.partials.menu.menu-cart', ['cart' => $cart, 'total' => $total]) --}}
				{{-- @include('frontend.layout.partials.menu.menu-cart') --}}
				@include('frontend.layout.partials.menu.menu-cart')


				@include('frontend.layout.partials.menu.menu')
			</nav>
			<!-- #primary-menu end --> </div>
	</div>

</header>
