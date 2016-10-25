@extends('frontend/layout/layout')


@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')@endsection

@section('scripts')@endsection

@section('ppscripts')

@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_category->roots()])
@endsection


@section('page-title')
<!-- Page Title ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <h1 itemprop="headline" >Category</h1>
                <span>Browse by Categoy</span>
                <ol class="breadcrumb">
                    <li><a href="{!! url('/') !!}">Home</a></li>
                    <li class="active">Category</li>
                </ol>
            </div>
        </section><!-- #page-title end -->
@endsection



@section('content')
<!-- Content ============================================= -->
<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<!-- Post Content ============================================= -->
                    <div class="postcontent nobottommargin col_last clearfix"
                        <!-- Posts ============================================= -->
                        <div id="posts">
                            @foreach($articles as $article)
                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="{!! url($article->path . $article->file_name) !!}" data-lightbox="image">
                                    <img class="image_fade" src="{!! url($article->path . $article->file_name) !!}" alt="{!! $article->slug !!}-image"></a>
                                    http://quiltingindustry.com/uploads/article/enahance_your_quilt.jpg
                                </div>
                                <div class="entry-title">
                                    <h2><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">{!! $article->title !!}</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <span datetime="{!! $article->created_at !!}" class="time"></span></li>
                                    <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                    <li><i class="icon-folder-open"></i>  {!! $article->categories[0]->title !!}</li>
                                    {{-- <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li> --}}
                                    {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                                </ul>
                                <div class="entry-content">
                                    <p> {!! str_limit($article->content, $word = 300, $end = '...') !!}</p>
                                    <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}"class="more-link">Read More</a>
                                </div>
                            </div>
                            @endforeach
                        </div><!-- #posts end -->
                    </div><!-- .postcontent end -->

                    <!-- Sidebar ============================================= -->
                    <div class="sidebar nobottommargin clearfix">
                        @include('frontend/article/sidebar', array($tags, $categories))
                    </div>
</div>
</section>
@endsection

