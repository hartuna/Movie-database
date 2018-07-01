<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateVideoRequest;
use App\Video;

class VideosController extends Controller
{
    // Pobieram listę filmów
    public function index(){
    	$videos = Video::latest()->get();
    	return view('videos.index')->with('videos', $videos);
    }
    // Pobieram numer filmu na podstawie url
    public function show($id){
    	$video = Video::find($id);
    	return view('videos.show')->with('video', $video);
    }
    public function create(){
    	return view('videos.create');
    }
    public function store(CreateVideoRequest $request){
        Video::create($request->all());
    	return redirect('videos');
    }
    public function location(){
        return redirect('videos');
    }
}
