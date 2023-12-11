<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Front\SaveNewslisterMail;

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

Route::get('/base', function () {
    return view('_layout/base');
});

Route::get('/our-services', function () {
    return view('services');
})->name('our_service');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/join-us', function () {
    return view('join_us');
})->name('join_us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/fondation', function () {
    return view('fondation');
})->name('fondation');

Route::get('/service-single', function () {
    return view('service-single');
})->name('service_single');

Route::get('/services', function (){
    return view('services');
})->name('services');


// Formulaire de contact
Route::post('/save_contact_form', ContactUsController::class)->name('save_contact_form');

// services
Route::get('/service-market', function () {
    return view('services_page.market');
})->name('service_market');

Route::get('/adhesion-form', App\Http\Livewire\AdhesionForm::class);


Route::get('/force-log', function () {
    $user = new \App\Models\User(["name" => 'test', "email" => "test@edenis.com", "password" => password_hash('123456789', PASSWORD_DEFAULT)]);
    $user->save();
    auth()->login(\App\Models\User::all()->first());
});

Route::post('/post-newsletter', SaveNewslisterMail::class)->name('post-newsmail');


Route::post('/post-adhesionform', App\Http\Controllers\Front\SaveAdhesionForm::class)->name('post-adhesionform');

Route::get('/care-people', function(){
    return view('care-people');
})->name('care-people');