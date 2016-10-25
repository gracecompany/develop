<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">  Layout Options</button>
<div class="collapse" id="collapseExample">
    <div class="well">
        <div class="form-group col-sm-2">
            {!! Form::label('support_tab', 'Docs Tab:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox('support_tab', true) !!}
            </label>
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label( 'reviews_tab', 'Reviews Tab:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox( 'reviews_tab', true) !!}
            </label>
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('docs_tab', 'Docs Tab:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox('docs_tab', true) !!}
            </label>
        </div>
        <div class="form-group col-sm-2">
            {!! Form::label('warranty_tab', 'Warranty Tab:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox('warranty_tab', true) !!}
            </label>
        </div>
        <br style="clear:both" />
    </div>
</div>