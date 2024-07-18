<?php
use App\Http\Controllers\comment;
use App\Http\Controllers\post;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');


    
});

Route::resource('comment',commentController::class);
Route::resource('post',postController::class);