@extends('master')
@section('content')
<div id="pageTitle">
	<h1>{{ $video->title }}</h1>
</div>
<div id="oneVideoContainer">
	<div class="oneVideo">
		<iframe src="{{ $video->url }}?showinfo=0" frameborder="0" allowfullscreen></iframe>
		<h2>{{ $video->title }}</h2>
		<p>{{ $video->description }}</p>
	</div>
</div>
@stop