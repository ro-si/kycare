<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('welcome');
//});
 //use est tres important
use App\Http\Controllers\TemplateController;

Route::get('/home', [TemplateController::class, 'index']);
Route::get('/about', [TemplateController::class, 'about']);
Route::get('/service', [TemplateController::class, 'service']);





Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/registe', function () {
    return view('auth.registe');
});


Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/loginn', function () {
    return view('auth.loginn');
});


Route::get('/profil', function () {
    return view('frontend.profil');
});
