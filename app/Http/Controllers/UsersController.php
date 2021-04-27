<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Client\Request;

class UsersController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function add(Request $request){
 
       
    	$user = User::create($request->all());
 
    	return response()->json($user);
 
	}
    public function edit(Request $request, $id){

    	$user  = User::find($id);
    	$post->update($request->all());
 
    	return response()->json($post);
	}  

    public function delete($id){
    	$post  = User::find($id);
    	$post->delete();
 
    	return response()->json('Removed successfully.');
	}

    public function index(){
 
    	$post  = User::all();
 
    	return response()->json($post);
 
	}
}
