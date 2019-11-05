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
use App\Post;
use App\User;
use App\Comment;
use App\Category;
Route::get('/', function () {
    return view('welcome');
   //asdasdhhjmoko,oi,ik8
});

Route::get('/hienthi','CategoryController@index');
Route::get('users', function () {
    $users=User::get();
    foreach($users as $user)
    {
        dd($user->profiles['name']);
    }
});
Route::get('posts', function () {
    $posts=Post::get();
    foreach($posts as $post)
    {
        dd($post->comments);
    }
});
Route::get('comments', function () {
    $comments=Comment::get();
    foreach($posts as $post)
    {
        dd($post->comments);
    }
});
