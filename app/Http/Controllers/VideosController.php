<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
