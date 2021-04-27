<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function createPost(Request $request)
    {
        $post=Post::create($request->all());
        return response()->json($post);
    }
    public function updatePost(Request $request,$id)
    {
        $post=Post::find($id);
        $post->body=$request->input('body');
        $post->save();

        return response()->json($post);
        
    }
    public function viewPost($id)
    {
        $post=Post::find($id);
       
        
        return response()->json($post);
    }
    {
        $post=Post::find($id);
        $post->delete();
        
        return response()->json('Removed Successfully. ');
    }
    public function index()
    {
        $post=Post::all();

        return response()->json($post);
    }
}



