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
Route::get('/contact', function (){
      return "hi mutherfuckers ! ";  });
Route::get('something/route/like/that', array('as'=>'name.to_use',function(){

    $url = route('name.to_use');
    
    return "This is my simple routed function ".$url;
}));