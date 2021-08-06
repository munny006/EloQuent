<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Post;
class PostController extends Controller
{
    public function index(){

    	$post = post::all();
    	return view('posts',compact('post'));
    }

    public function posts(){

    	$posts = Post::where('user_id',2)->get();
    	return view('posts_by_user',compact('posts'));
    }
}
