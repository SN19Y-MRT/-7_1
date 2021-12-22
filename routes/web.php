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
Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

Route::get('/info',function(){
   phpinfo(); 
});

Route::get('/ja',function(){
   $r = mb_detect_encoding("ああああ");
   dd($r);
});



use  Illuminate\Support\Facades\DB;

Route::get('/test',function(){
    
       $r = DB::insert( "insert into posts (title, body) values ('こんにちわ','aaaa')");
   dd($r);
});
