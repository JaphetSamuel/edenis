<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/base', function (){
    return view('_layout/base');
});

Route::get('/our-services', function (){
    return view('our_services');
})->name('our_service');

Route::get('/blog', function (){
    return view('blog');
})->name('blog');

Route::get('/join-us', function (){
    return view('join_us');
})->name('join_us');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');
