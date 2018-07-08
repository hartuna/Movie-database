@extends('master')
@section('content')
<div id="pageTitle">
	<h1>Edytuj film</h1>
</div>
{!! Form::model($video, ['method'=>'PATCH', 'action'=>['VideosController@update', $video->id], 'class'=>'addVideo']) !!}
@include('videos.form', ['buttonText'=>'Zapisz zmiany'])
{!! Form::close() !!}
@stop