<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
   //return 'About page';
   return view('About');
});

Route::get('/post', function () {
     //return 'Post page';
    return view('Post ');
});

Route::get('/profile', function () {
     //return 'Profile Page';
    return view('Profile ');
});

Route::get('/contact', function () {
    return  view('contact');
});

Route::view('link','/link') ;
    