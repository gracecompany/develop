
<div class="well">
    <!-- Tracking Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tracking', 'Tracking:') !!}
        {!! Form::text('tracking', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Datalayer Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('datalayer', 'Datalayer:') !!}
        {!! Form::text('datalayer', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Filter Class Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('filter_class', 'Filter Class:') !!}
        {!! Form::select('filter_class', ['pf-new' => 'pf-new', 'pf-qn' => 'pf-qn', 'pf-mq' => 'pf-mq', 'pf-hq' => 'pf-hq', 'pf-hoop' => 'pf-hoop', 'pf-acc' => 'pf-acc'], null, ['class' => 'form-control']) !!}
    </div>
<br style="clear:both" />
</div>
