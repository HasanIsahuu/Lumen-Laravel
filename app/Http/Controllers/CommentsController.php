<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Client\Request;

class ExampleController extends Controller
{
    
   public function create(Request $request)
   {
    $comment=Comment::create($request->all());
    return response()->json($comment);
   }
    
}
