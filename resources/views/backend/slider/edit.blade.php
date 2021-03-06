@extends('backend/layout/clip')

@section('topscripts')
<script type="text/javascript">
    {!! HTML::style('dropzone/css/basic.css') !!}
    {!! HTML::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
    {!! HTML::style('dropzone/css/dropzone.css') !!}
    {!! HTML::script('dropzone/dropzone.js') !!}
    {!! HTML::script('ckeditor/ckeditor.js') !!}
    {!! HTML::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}
        $(document).ready(function () {


        });
</script>
@endsection

@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! url(getLang() . '/admin/slider') !!}"> Sliders</a></li>
            <li class="active">Update Slider</li>
        </ol>
        <div class="page-header">
            <h1> Slider <small> | Update Slider</small> </h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
@endsection

@section('content')
<div class="row">
{{--
<div class="col-sm-2"></div>
--}}
<div class="col-sm-10">
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="clip-stats"></i>
            <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
            </div>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix"></div>
                    @include('flash::message')
                    <div class="clearfix"></div>
                    <div class="space12">
                        <div class="btn-group btn-group-lg">
                            <a class="btn btn-default" href="{!! url(getLang() . '/admin/video/index') !!}">Videos </a>
                            <a class="btn btn-default hidden-xs" href="{!! route('admin/video/create') !!}"> <i class="fa fa-plus"></i> Add Video </a>
                        </div>
                    </div>
                    {!! Form::open( array( 'route' => array( getLang() . '.admin.slider.update', $slider->id), 'method' => 'PATCH', 'files'=>true)) !!}
                    <!-- Title -->
                    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                        <label class="control-label" for="title">Title</label>
                        <div class="controls">
                            {!! Form::text('title', $slider->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                            @if ($errors->first('title'))
                            <span class="help-block">{!! $errors->first('title') !!}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="control-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                        <label class="control-label" for="description">Description</label>
                        <div class="controls">
                            {!! Form::textarea('description', $slider->description, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Description', 'value'=>Input::old('description'))) !!}
                            @if ($errors->first('description'))
                            <span class="help-block">{!! $errors->first('description') !!}</span>
                            @endif
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img data-src="" {!! (($slider->path) ? "src='".url($slider->path)."'" : null) !!} alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                        <div>
                            <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
                                @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span> <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                        <!-- Form actions -->
                        {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')
@endsection