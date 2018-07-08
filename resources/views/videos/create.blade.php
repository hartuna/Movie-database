@extends('master')
@section('content')
<div id="pageTitle">
	<h1>Dodaj film</h1>
</div>
{!! Form::open(['url'=>'videos', 'class'=>'addVideo']) !!}
@include('videos.form', ['buttonText'=>'Dodaj video'])
{!! Form::close() !!}
@stop