<?php

use Illuminate\Support\Facades\Route;



Route::view('/register', 'RegistrationPage')->name('register');
Route::post('/register_user', [])->name('register');

Route::view('/', 'login')->name('login');
