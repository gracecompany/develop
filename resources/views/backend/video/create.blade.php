@extends('backend/layout/clip')
@section('topscripts')
<script type="text/javascript">
    (function($) {

            $("#video_id").keyup(function () {

                $("#msg").append('<div class="msg-save" style="float:right; color:red;">Searching!</div>');
                $('.msg-save').delay(1000).fadeOut(500);

                var id = $(this).val();
                var type = $('input[name=type]:checked').val();

                id = urlParser(id, type);

                $.ajax({
                    type: "POST",
                    url: "{!! url(getLang() . '/admin/video/get-video-detail') !!}",
                    data: {"video_id": id, "type": type},
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {

                        //console.log(response);
                        $("#video_id").val(response.id);
                        $("#title").val(response.title);

                    },
                    error: function () {
                        //alert("error");
                    }
                });

                return false;
            });
        });
</script>
@endsection
@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! url(getLang() . '/admin/video/index') !!}><i class="fa fa-play"></i> Video</a></li>
            <li class="active">New Video</li>
        </ol>
        <div class="page-header">
            <h1> Video <small> | Add Video</small> </h1>
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

                        {!! Form::open(['action' => '\App\Http\Controllers\Admin\VideoController@store']) !!}
                        <!-- Type -->
                        <label class="control-label" for="type">Type</label>
                        <div class="controls">
                            <div class="radio">
                                <label>
                                {!! Form::radio('type', 'youtube', true, array('id'=>'youtube', 'class'=>'type')) !!}
                                <span>Youtube</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                {!! Form::radio('type', 'vimeo', false, array('id'=>'vimeo', 'class'=>'type')) !!}
                                <span>Vimeo</span>
                                </label>
                            </div>
                            <br>
                        </div>
                        <!-- Video Id -->
                        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <label class="control-label" for="video_id">Video Id</label>
                            <div class="controls">
                                {!! Form::text('video_id', null, array('class'=>'form-control', 'id' => 'video_id', 'placeholder'=>'Video Id', 'value'=>Input::old('video_id'))) !!}
                                @if ($errors->first('video_id'))
                                <span class="help-block">{!! $errors->first('video_id') !!}</span>
                                @endif
                            </div>
                        </div>
                        <!-- Title -->
                        <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <label class="control-label" for="title">Title</label>
                            <div class="controls">
                                {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
                                @if ($errors->first('title'))
                                <span class="help-block">{!! $errors->first('title') !!}</span>
                                @endif
                            </div>
                        </div>
                        <!-- Form actions -->
                        {!! Form::submit('Save Changes', [array(]'class' => 'btn btn-success']) !!}
                        <a href="{!! url(getLang() . '/admin/video') !!}" class="btn btn-default">&nbsp;Cancel</a>
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
<script src="{!! asset('/frontend/js/grace.js') !!}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')
@endsection