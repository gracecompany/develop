<br style="clear:both" />
<br style="clear:both" />
<div class="col-sm-12">
	<!-- Dealer Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('dealer', 'Dealer:') !!}
	    {!! Form::text('dealer', null, ['class' => 'form-control']) !!}
	</div>
	<!-- Contact Person Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('contact_person', 'Contact Person:') !!}
	    {!! Form::text('contact_person', null, ['class' => 'form-control']) !!}
	</div>
</div>


<div class="col-sm-6">
<h3>Phone Numbers</h3>
<hr>
	<!-- Mobile Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('mobile', 'Mobile:') !!}
	    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Toll Free Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('toll_free', 'Toll Free:') !!}
	    {!! Form::text('toll_free', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Phone Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('phone', 'Phone:') !!}
	    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Company Phone Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('company_phone', 'Company Phone:') !!}
	    {!! Form::text('company_phone', null, ['class' => 'form-control']) !!}
	</div>

</div>

<div class="col-sm-6">
<h3>Store Hours</h3>
<hr>
	<!-- Hours Opening Mf Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_opening_mf', 'Hours Opening Mf:') !!}
	    {!! Form::text('hours_opening_mf', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Hours Closing Mf Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_closing_mf', 'Hours Closing Mf:') !!}
	    {!! Form::text('hours_closing_mf', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Hours Opening Sat Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_opening_sat', 'Hours Opening Sat:') !!}
	    {!! Form::text('hours_opening_sat', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Hours Closing Sat Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_closing_sat', 'Hours Closing Sat:') !!}
	    {!! Form::text('hours_closing_sat', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Hours Opening Sun Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_opening_sun', 'Hours Opening Sun:') !!}
	    {!! Form::text('hours_opening_sun', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Hours Closing Sun Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('hours_closing_sun', 'Hours Closing Sun:') !!}
	    {!! Form::text('hours_closing_sun', null, ['class' => 'form-control']) !!}
	</div>
</div>





<div class="col-sm-12">
<h3>Email @</h3>
<hr>
	<!-- Public Email Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('public_email', 'Public Email:') !!}
	    {!! Form::text('public_email', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Support Email Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('support_email', 'Support Email:') !!}
	    {!! Form::text('support_email', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="col-sm-12">
<h3>Store Images</h3>
<hr>
	<!-- Logo Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('logo', 'Logo:') !!}
	    {!! Form::file('logo') !!}
	</div>
	<div class="clearfix"></div>
</div>
<div class="col-sm-12">
	<!-- Thumbnail Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('thumbnail', 'Thumbnail:') !!}
	    {!! Form::file('thumbnail') !!}
	</div>
	<div class="clearfix"></div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.dealers.index') !!}" class="btn btn-default">Cancel</a>
</div>
