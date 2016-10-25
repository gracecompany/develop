@extends('frontend/layout/product')
@section('htmlschema')
itemscope itemtype="http://schema.org/Product"
@endsection
@section('seo')
<meta name="title" content="{!! $product->meta_title !!}">
<meta name="description" content="{!! $product->meta_description !!}">
<meta name="keywords" content="{!! $product->meta_keywords !!}">
<meta name="author" content="The Grace Company">
@endsection
@section('title')
{!! $product->meta_title !!} | Manufactured By The Grace Company
@endsection
@section('bodyschema')@endsection
@section('bodytag')@endsection
@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title-off')
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
<section id="content" style="margin-bottom: 0px;">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-product">
				<div class="product">
					@include('frontend.shop.partials.single.parts.image-section')
					{{-- @include('frontend.shop.partials.single.parts.product-details') --}}
					{{-- @include('frontend.shop.partials.single.parts.product-branding') --}}
					{{-- @include('frontend.shop.partials.single.parts.product-tabs') --}}
				</div>
				{{-- @include('frontend.shop.partials.single.related') --}}
			</div>
		</div>
	</div>
</section>
<!-- #content end -->
@endsection

@section('json-ld-off')
<script type="application/ld+json">
	{
	  "@context": "http://schema.org/",
	  "@type": "Product",
	  "name": "{!! $product->name !!}",
	  "image": "{!! url() !!}{!! $product->thumbnail !!}",

	  "description": "{!! $product->meta_description !!}",
	  "mpn": "{!! $product->model !!}",
	  "url": "{{ url() }}{!! url(getLang().'/product/'. $product->slug) !!}",
	  "brand": {
	    "@type": "Thing",
	    "name": "Grace"
	  },
	         @if($product->ratings)
	  "aggregateRating": {
	    "@type": "AggregateRating",
	    "ratingValue": "4.4",
	    "reviewCount": "89"
	  },
	         @endif
	  "offers": {
	    "@type": "Offer",
	    "priceCurrency": "USD",
	    "price": {!! $product->price !!},
	           @if($product->promo)
	                "lowPrice": "{!! $product->promo->price !!}",
	                "highPrice": "{!! $product->price !!}",
                        "priceValidUntil": "2020-11-05",
	           @endif
	    "itemCondition": "http://schema.org/NewCondition",
	    "availability": "http://schema.org/InStock",
	    "seller": {
	      "@type": "Organization",
	      "name": "The Grace Company"
	    }
	  }
	}
</script>
@endsection

@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')
@endsection
