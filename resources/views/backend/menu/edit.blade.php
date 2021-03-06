@extends('backend/layout/clip')

@section('topscripts')
@endsection

@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin/menu') !!}">Menu</a></li>
        <li class="active">Add Menu Item</li>
            </ol>
            <div class="page-header">
                <h1> Menu <small> | Add Menu</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
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
                <div class="space12">
                    <div class="btn-group btn-group-lg">
                        <a class="btn btn-default" href="{!! route('admin.menu') !!}"> Menus </a>
                        <a class="btn btn-default active" href="javascript:;"> <i class="fa fa-plus"></i> Edit Link</a>
                    </div>
                </div>
<div class="col-md-8">

    {!! Form::open( array( 'route' => array(getLang(). '.admin.menu.update', $menu->id), 'method' => 'PATCH')) !!}
    <!-- Title -->
    <div class="col-md-4 control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {!! Form::text('title', $menu->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>
            @endif
        </div>

    </div>
<br style="clear:both" />
<br style="clear:both" />
    <!-- Type -->
    <label class="control-label" for="title">Type</label>

    <div class="controls">
        <div class="radio">
            <label>
                {!! Form::radio('type', 'module', (($menu->type == 'module') ? true : false), array('id'=>'module', 'class'=>'type')) !!}
                <span>Module</span>
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio('type', 'custom', (($menu->type == 'custom') ? true : false), array('id'=>'custom', 'class'=>'type')) !!}
                <span>Custom</span>
            </label>
        </div>

    </div>
<br style="clear:both" />
    <!-- Modules -->
    <div class="control-group col-md-4 {!! $errors->has('options') ? 'has-error' : '' !!} modules">
        <label class="control-label" for="title">Options</label>

        <div class="controls">
            {!! Form::select('option', $options, $menu->option, array('class'=>'form-control', 'id' => 'options', 'value'=>Input::old('options'))) !!}
            @if ($errors->first('options'))
            <span class="help-block">{!! $errors->first('options') !!}</span>
            @endif
        </div>
        <br>
    </div>

    <!-- URL -->
    <div style="display:none" class="control-group {!! $errors->has('url') ? 'has-error' : '' !!} url">
        <label class="control-label" for="first_name">URL</label>

        <div class="controls">
            {!! Form::text('url',$menu->url, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'Url', 'value'=>Input::old('url'))) !!}
            @if ($errors->first('url'))
            <span class="help-block">{!! $errors->first('url') !!}</span>
            @endif
        </div>
    </div>
    <br style="clear:both" />
    <!-- Form actions -->
    {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}
</div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('bottomscripts')
    <script>
        $(document).ready(function(){
            $('.sidebar #menu-edit').addClass('active-section');
        });
    </script>
@endsection

@section('clipinline')
    TableData.init();
@endsection
