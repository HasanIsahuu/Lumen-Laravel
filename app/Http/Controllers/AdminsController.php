<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Client\Request;

class AdminControllers extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth:admin');
    }
	public function add(Request $request){
 
       
    	$user = Admin::create($request->all());
 
    	return response()->json($user);
 
	}

    public function delete($id){
    	$post  = Admin::find($id);
    	$post->delete();
 
    	return response()->json('Removed successfully.');
	}


    public function index(){
 
    	$post  = Admin::all();
 
    	return response()->json($post);
 
	}
}
