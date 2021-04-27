<?php

/*
|--------------------------------------------------------------------------
| router$routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an router$routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api','middleware'=>'auth'], function () use ($router) {
    $router->get('me','AuthController@me');
});


$router->group(['prefix'=>'api'], function () use ($router) {
    $router->post('register','AuthController@register');
    $router->post('login','AuthController@login');
});

$router->group(['prefix' => 'api/v1'], function($router)
{


	//posts
	$router->group(['prefix' => 'posts', 'middleware'=>'auth'], function($router)
{

	$router->post('add','PostsController@createPost');

	$router->get('view/{id}','PostsController@viewPost');

	$router->put('edit/{id}','PostsController@updatePost');
 	 
	$router->delete('delete/{id}','PostsController@deletePost');

	$router->get('index','PostsController@index');

	
});


//users
		$router->group(['prefix' => 'users', 'middleware'=>'cors'], function($router)
			{
				$router->post('add','UsersController@add');

				$router->get('view/{id}','UsersController@view');

				$router->put('edit/{id}','UsersController@edit');
			 	 
				$router->delete('delete/{id}','UsersController@delete');

				$router->get('index','UsersController@index');
		
            });
		
        //admins
            $router->group(['prefix' => 'admins', 'middleware'=>'cors'], function($router)
			{
				$router->post('add','AdminsController@add');

				$router->get('view/{id}','AdminsController@view');
			 	 
				$router->delete('delete/{id}','AdminsController@delete');

				$router->get('index','AdminsController@index');
			});



});



