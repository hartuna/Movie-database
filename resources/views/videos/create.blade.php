@extends('master')
@section('content')
<div id="pageTitle">
	<h1>Dodaj film</h1>
</div>
{!! Form::open(['url'=>'videos', 'class'=>'addVideo']) !!}
<div class="formGroup">
	@if(count($errors) > 0)
	<div id="errors">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif
	{!! Form::label('title', 'Tytuł') !!}
	{!! Form::text('title', null, ['class'=>'addVideoText']) !!}
	<div class="clear"></div>
</div>
<div class="formGroup">
	{!! Form::label('description', 'Opis') !!}
	{!! Form::textarea('description', null, ['class'=>'addVideoText']) !!}
	<div class="clear"></div>
</div>
<div class="formGroup">
	{!! Form::label('url', 'Adres filmu') !!}
	{!! Form::text('url', null, ['class'=>'addVideoText']) !!}
	<div class="clear"></div>
</div>
<div class="formGroup">
	{!! Form::submit('Dodaj film', ['class'=>'addVideoButton']) !!}
	<div class="clear"></div>
</div>
{!! Form::close() !!}
@stop