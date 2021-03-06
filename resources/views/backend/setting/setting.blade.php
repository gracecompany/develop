@extends('backend/layout/clip')

@section('topscripts')
<script type="text/javascript">
    (function($){
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
@endsection

@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Change Settings</li>
        </ol>
        <div class="page-header">
            <h1> Settings <small> | Change Settings</small> </h1>
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
                        <div class="col-lg-10">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
                                <li><a href="#info" data-toggle="tab">Info</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings">
                                    <br>
                                    <h4><i class="glyphicon glyphicon-cog"></i> Settings</h4>
                                    <br>
                                    {!! Form::open() !!}
                                    <!-- Title -->
                                    <div class="control-group {!! $errors->has('site_title') ? 'has-error' : '' !!}">
                                        <label class="control-label" for="title">Title</label>
                                        <div class="controls">
                                            {!! Form::text('site_title', ($setting['site_title']) ?: null, array('class'=>'form-control', 'id' => 'site_title', 'placeholder'=>'Title', 'value'=>Input::old('site_title'))) !!}
                                            @if ($errors->first('title'))
                                            <span class="help-block">{!! $errors->first('site_title') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Google Analytics Code -->
                                    <div class="control-group {!! $errors->has('ga_code') ? 'has-error' : '' !!}">
                                        <label class="control-label" for="title"> Google Analytics Code</label>
                                        <div class="controls">
                                            {!! Form::text('ga_code', ($setting['ga_code']) ?: null, array('class'=>'form-control', 'id' => 'ga_code', 'placeholder'=>' Google Analytics Code', 'value'=>Input::old('ga_code'))) !!}
                                            @if ($errors->first('ga_code'))
                                            <span class="help-block">{!! $errors->first('ga_code') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Meta Keywords -->
                                    <div class="control-group {!! $errors->has('meta_keywords') ? 'has-error' : '' !!}">
                                        <label class="control-label" for="title">Meta Keywords</label>
                                        <div class="controls">
                                            {!! Form::text('meta_keywords', ($setting['meta_keywords']) ?: null, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) !!}
                                            @if ($errors->first('meta_keywords'))
                                            <span class="help-block">{!! $errors->first('meta_keywords') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Meta Description -->
                                    <div class="control-group {!! $errors->has('meta_description') ? 'has-error' : '' !!}">
                                        <label class="control-label" for="title">Meta Description</label>
                                        <div class="controls">
                                            {!! Form::text('meta_description', ($setting['meta_description']) ?: null, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) !!}
                                            @if ($errors->first('meta_description'))
                                            <span class="help-block">{!! $errors->first('meta_description') !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                    {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                                    {!! Form::close() !!}
                                </div>
                                <div class="tab-pane" id="info">
                                    <br>
                                    <h4><i class="glyphicon glyphicon-info-sign"></i> Info</h4>
                                    <br>
                                    Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                        Aliquam in felis sit amet augue.
                                    </p>
                                </div>
                            </div>
                        </div>
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