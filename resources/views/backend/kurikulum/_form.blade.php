<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	{!! Form::label('nama','Nama Kurikulum',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
	
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jabatan') ? 'has-error' : '' }}">
	{!! Form::label('jabatan','jabatan Kurikulum',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('jabatan',null,['class'=>'form-control']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
	
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? 'has-error' : '' }}">
	{!! Form::label('foto','Foto Kurikulum',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::file('foto',['class'=>'btn btn-warning']) !!} <br>
		@if(isset($kurkulum) && $kurkulum->foto)
		<p>
			{!! Html::image(asset('image/'.$kurikulum->foto),null,['class'=>'image-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<hr>

<div class="form-group">
	<div class="col-md-12" align="right">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>