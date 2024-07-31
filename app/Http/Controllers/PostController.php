<?php

namespace App\Http\Controllers;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('/posts',[
            "title" => "Posts",
            "post" => posts::all()
        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => "Single Post",
            "posted" => posts::find($slug)
        ]);
    }
}
