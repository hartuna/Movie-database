@extends('master')
@section('content')
<div id="pageTitle">
	<h1>Najnowsze</h1>
</div>
<div id="videos">
	@foreach($videos as $video)
	<div class="video">
		<iframe src="{{ $video->url }}?showinfo=0" frameborder="0" allowfullscreen></iframe>
		<h4><a href="/videos/{{ $video->id }}">{{ $video->title }}</a></h4>
		<p>{{ $video->description }}</p>
		<p>{{ $video->user->name }}</p>
	</div>
	@endforeach
</div>
@stop