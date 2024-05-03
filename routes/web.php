<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/one', function () {
//    return view('one');
//});
Route::get('/two', function () {
    return view('two');
});
//ixtiyory paramentr
Route::get('/asad/{name?}', function ($name = 'asad') {
    return $name;
});

Route::get('/humans/{human}/posts/{post}',function ($humanID,$postID){
    return [$humanID,$postID];
});
//ifoda cheklovi
Route::get('/new/{id}',function ($id){
    return $id;
})->where('id','[A-Za-z]+');

//middleware
Route::get('/some',function (){
    return view('one');
})->middleware(\App\Http\Middleware\Authenticate::class);

Route::resource('posts', \App\Http\Controllers\PostController::class);
