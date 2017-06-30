<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/contact', function (){
//      return "hello evryOne! ";  });
//Route::get('something/route/like/that', array('as'=>'name.to_use',function(){
//
//    $url = route('name.to_use');
//    
//    return "This is my simple routed function ".$url;
//}));

Route::get('/post', 'PostsController@index');
Route::resource('posts' , 'PostsController');
Route::get('/geting', 'PostsController@to_test_function');
Route::post('/geting', 'PostsController@to_test_function');
Route::get('/get_some_other', 'PostsController@create');