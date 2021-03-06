@extends('backend/layout/clip')
@section('topscripts')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="{!! asset('/clip/bower_components/select2/dist/css/select2.min.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/assets/plugin/bootstrap-timepicker.min.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/jquery.tagsinput/dist/jquery.tagsinput.min.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/summernote/dist/summernote.css') !!}" rel="stylesheet" />
<link href="{!! asset('/clip/bower_components/bootstrap-fileinput/css/fileinput.min.css') !!}" rel="stylesheet" />
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endsection
@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Products</li>
        </ol>
        <div class="page-header">
            <h1 class="pull-left">Create New Product</h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid add-product">
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{!! route('product.store') !!}" method="post" enctype="multipart/form-data">

@include('backend.ecom.products.partials.layout-options')

<div class="col-lg-12">
    <div class="tabbable">
        <h3>TAB SELECTION:</h3>
        <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
            <li class="active"> <a data-toggle="tab" href="#panel_tab_overview"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp; OVERVIEW </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_image"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; IMAGES &amp; FILES </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_pricing"><i class="fa fa-money" aria-hidden="true"></i>&nbsp; PRICING / TAX / SHIPPING </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_meta"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; META / SEO </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_additional"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp; ADDITIONAL </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_reviews"><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp; REVIEWS</a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_help"><i class="fa fa-info" aria-hidden="true"></i>&nbsp; HELP / SUPPORT</a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_docs"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp; DOCS </a> </li>
            <li class=""> <a data-toggle="tab" href="#panel_tab_warranty"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp; WARRANTY </a> </li>
            @if(Sentinel::findRoleById(1))
            <li class=""> <a data-toggle="tab" href="#panel_tab_developer"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; DEVELOPER </a> </li>
            @endif
        </ul>
        <div class="tab-content">
            <div class="form-group col-sm-12 right">
                {!! Form::submit('Add Product', ['class' => 'btn btn-primary' ]) !!}
                <a href="{!! url(getLang().'.admin.products.index') !!}" class="btn btn-default">Cancel</a>
            </div>


            <div id="panel_tab_overview" class="tab-pane active">
                @include('backend.ecom.products.create-sections.overview-fields')
                <br style="clear:both" />
            </div>

            <div id="panel_tab_image" class="tab-pane">
                @include('backend.ecom.products.create-sections.image-fields')
                <br style="clear:both" />
            </div>
            <div id="panel_tab_pricing" class="tab-pane">
                @include('backend.ecom.products.create-sections.pricing-fields')
                <br style="clear:both" />
            </div>
            <div id="panel_tab_meta" class="tab-pane">
                @include('backend.ecom.products.create-sections.meta-fields')
                <br style="clear:both" />
            </div>
            <div id="panel_tab_additional" class="tab-pane">
                @include('backend.ecom.products.create-sections.additional-fields')
                <br style="clear:both" />
            </div>
            {{-- @if($product->reviews_tab) --}}
            <div id="panel_tab_reviews" class="tab-pane">
                {{-- @include('backend.ecom.products.create-sections.reviews') --}}
                <br style="clear:both" />
            </div>
            {{-- @endif --}}

            {{-- @if($product->support_tab) --}}
            <div id="panel_tab_help" class="tab-pane">
                @include('backend.ecom.products.create-sections.help')
                <br style="clear:both" />
            </div>
            {{-- @endif --}}

            {{-- @if($product->docs_tab) --}}
            <div id="panel_tab_docs" class="tab-pane">
                {{-- @include('backend.ecom.products.create-sections.docs') --}}
                <br style="clear:both" />
            </div>
            {{-- @endif --}}

            {{-- @if($product->warranty_tab) --}}
            <div id="panel_tab_warranty" class="tab-pane">
                {{-- @include('backend.ecom.products.create-sections.warranty') --}}
                <br style="clear:both" />
            </div>
            {{-- @endif --}}

            @if(Sentinel::findRoleById(1))
            <div id="panel_tab_developer" class="tab-pane">
                {{-- @include('backend.ecom.products.create-sections.developer-fields') --}}
                <br style="clear:both" />
            </div>
            @endif

        </div>
    </div>

    <div class="line"></div>
    {{--
    <hr>
    --}}
    {{--
    <div class="row options">
        --}}
        {{--
        <div class="form-group col-md-12">
            --}}
            {{--<label for="options">Product Options : </label>--}}
            {{--
            <div id="add_product_option">Add Option</div>
            --}}
            {{--
            <div class="options-group row">
                --}}
                {{--
                <div class="option col-md-3" op-index="0">
                    --}}
                    {{--<span class="fa fa-times fa-lg remove-option"></span>--}}
                    {{--<label for="options">Option Name : </label>--}}
                    {{--<input type="text" name="options[0][name]"><br>--}}
                    {{--
                    <div class="add_option_value">+ Add Value</div>
                    --}}
                    {{--
                    <ul class="values">
                        --}}
                        {{--
                        <li><input type="text" name="options[0][values][]"></li>
                        --}}
                        {{--
                    </ul>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
    <div class="row">
        --}}
        {{--
        <div class="form-group col-md-7">--}}
            {{--<input id="submit" type="submit" class="form-control btn btn-primary prod-submit" value="Add Product">--}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    {!! Form::close() !!}
    <div class="clearfix"></div>
</div>
@endsection

@section('bottomscripts')
<script src="{!! asset('/clip/bower_components/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/bootstrap-maxlength/src/bootstrap-maxlength.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/autosize/dist/autosize.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/select2/dist/js/select2.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/bootstrap-timepicker/js/bootstrap-timepicker.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/jquery.tagsinput/src/jquery.tagsinput.js') !!}"></script>
{{--         <script src="{!! asset('/clip/bower_components/summernote/dist/summernote.min.js') !!}"></script> --}}
{{--         <script src="{!! asset('/clip/bower_components/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/ckeditor/adapters/jquery.js') !!}"></script> --}}
<script src="{!! asset('/clip/bower_components/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') !!}"></script>
<script src="{!! asset('/clip/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>
<script>
    jQuery(document).ready(function($){
        $(function() {
     var options_counter = 0;
     $('.sidebar #products').addClass('active-section');
     $('#add_album_image').click(function() {
         $('.additional').append('<div class="row "><div class="form-group"><div class="col-md-8"><label for="album">Additional Photos:</label>' +
             '<input type="file" id="album" name="album[]" class="file form-control input-preview"> </div></div></div>');
         $(".input-preview").fileinput();
     });



     $('#add_product_option').click(function() {
         options_counter++;
         $('.options-group').append('<div class="option form-group col-md-3" op-index="' + options_counter + '" style="margin-bottom:15px">' +
                     '<div class="input-group">' +
                         '<span class="input-group-addon" id="sizing-addon2">Option</span>' +
                         '<input type="text" class="form-control" name="options[' + options_counter + '][name]">' +
                         '<span class="input-group-btn">' +
                             '<button type="button" class="btn btn-danger remove-option" aria-label="Delete">' +
                             '<i class="fa fa-trash-o " aria-hidden="true"></i>' +
                             '</button>' +
                             '<button type="button" id="add_product_value" class="btn btn-primary">' +
                             '<i class="fa fa-plus-square" aria-hidden="true"></i>' +
                             '</button>' +
                         '</span>' +
                     '</div>' +
                     '<div id="values"></div>' +
                     '</div>');
     });
     $(document).on("click", ".remove-option", function() {
         $(this).parent().parent().parent('.option').remove();
     });

     $(document).on("click", "#add_product_value", function() {

         $(this).parent().parent().parent('.option').find('#values')
                     .append('<div class="input-group col-md-10 col-md-offset-2">' +
                     '<span class="input-group-addon" id="sizing-addon2"><i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i></span>' +
                     '<input type="text" class="form-control" name="options[' + $(this).parent().attr('op-index') + '][values][]">' +
                     '<span class="input-group-btn">' +
                     '<button type="button" class="btn btn-danger remove-option" aria-label="Delete"><i class="fa fa-times fa-lg"></i></button>' +
                     '</span></div>');
     });
     $(document).on("click", ".remove-value", function() {
         $(this).parent().remove();
     });

     $('.summernote').summernote({
         popover: {
             air: []
         },
         height: 300,
         minHeight: null,
         maxHeight: null,
         callbacks: {
             onInit: function() {
                 console.log('Summernote is launched');
             },
             onBlur: function() {
                 console.log('products\'s content is changed.');
             },
         }
     });

    $("input#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("input#slug").val(Text);
    });

     $("input#facebook_title").blur(function() {
         $('input#facebook_title').val($('input#facebook_title').val() + ' on FaceBook.');
     });
     $("input#google_plus_title").blur(function() {
         $('input#google_plus_title').val($('input#google_plus_title').val() + ' on GooglePlus.');
     });
     $("input#twitter_title").blur(function() {
         $('input#twitter_title').val($('input#twitter_title').val() + ' on Twitter. ');
     });
 });
    });
</script>
@endsection

@section('clipinline')
{{-- FormElements.init(); --}}
@endsection