@extends('frontend/layout/product')
@section('htmlschema')
itemscope itemtype="http://schema.org/Product"
@endsection
@section('seo')@endsection
@section('json-ld-off')
<script type="application/ld+json">
	{
	  "@context": "http://schema.org/",
	  "@type": "Product",
	  "name": "{!! $product->name !!}",
	  "image": "http://www.example.com/anvil_executive.jpg",
	  "description": "Sleeker than ACME's Classic Anvil, the Executive Anvil is perfect for the business traveler looking for something to drop from a height.",
	  "mpn": "925872",
	  "brand": {
	    "@type": "Thing",
	    "name": "ACME"
	  },
	  "aggregateRating": {
	    "@type": "AggregateRating",
	    "ratingValue": "4.4",
	    "reviewCount": "89"
	  },
	  "offers": {
	    "@type": "Offer",
	    "priceCurrency": "USD",
	    "price": "119.99",
	    "priceValidUntil": "2020-11-05",
	    "itemCondition": "http://schema.org/UsedCondition",
	    "availability": "http://schema.org/InStock",
	    "seller": {
	      "@type": "Organization",
	      "name": "Executive Objects"
	    }
	  }
	}
</script>
@endsection
@section('title')
{!! $product->name !!} | Manufactured By The Grace Company
@endsection
@section('bodyschema')@endsection
@section('bodytag')@endsection
@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title')
<section id="page-title">
	<div class="container clearfix">
		<h1 itemprop="name" class="product_title entry-title">{!! $product->name !!}</h1>
		<span
			>{!! $product->subtitle !!}</span>
		<ol class="breadcrumb">
			<li><a href="{{ url(getLang().'/') }}">Home</a></li>
			<li><a href="{{ url(getLang().'/shop') }}">Shop</a></li>
			<li class="active">Product</li>
		</ol>
	</div>
</section>
@endsection
@section('content')
<section id="content">
	<div class="content-wrap">
	<div class="container clearfix">
		<div class="single-product">
			<div class="product">
				@include('frontend.shop.partials.single.parts.image-section')
				@include('frontend.shop.partials.single.parts.product-details')
				@include('frontend.shop.partials.single.parts.product-branding')
				@include('frontend.shop.partials.single.parts.product-tabs')


			</div>
			<div class="clear"></div>
			<div class="line"></div>
			{{--
			<div class="col_full nobottommargin">
				<h4>Related Products</h4>
				<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
					<div class="oc-item">
						<div class="product iproduct clearfix">
							<div class="product-image">
								<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
								<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
								<div class="sale-flash">50% Off*</div>
								<div class="product-overlay">
									<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
									<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
								</div>
							</div>
							<div class="product-desc center">
								<div class="product-title">
									<h3><a href="#">Checked Short Dress</a></h3>
								</div>
								<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
								<div class="product-rating">
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star-half-full"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@if($similair->count())
			<div class="more-info">
				<div class="container-fluid">
					<div class="col-md-12 ">
						<div class="heading">SIMILAR products</div>
						<ul class="products">
							@foreach($similair as $product)
							<li class="item clickable" data-href="{{ url('/product/'.$product->id.'-'.Str::slug($product->name).'/show') }}">
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-2 image">
										<img src="{{ $product->thumbnail }}">
									</div>
									<div class="col-md-9 col-sm-9 col-xs-9 prod-details">
										<div class="name">{{ $product->name }}</div>
										{{ str_limit(htmlspecialchars_decode(strip_tags($product->details)),250,' ...') }}
									</div>
									<div class="col-md-2 prod-price">
										${{ $product->price }}
									</div>
								</div>
								<hr>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@endif
			--}}
		</div>
	</div>
</section>
<!-- #content end -->
@endsection
@section('footer_scripts')
@endsection
@section('pp_footer_scripts')
@endsection
@section('inlinejs')
@endsection