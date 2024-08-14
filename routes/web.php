<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::view('/register', 'RegistrationPage')->name('register');
Route::view('/', 'login')->name('login');


Route::controller(UserController::class)->group(function () {

    Route::post('/register_user', 'register')->name('register_user');
    Route::post('/login_user', 'login_user')->name('login_user');

    Route::middleware(['ValidUser'])->group(function () {
        Route::get('/dashboard', 'dashboardPage')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/users', 'ShowAllUsers')->name('show.users');
        Route::get('/user/{id}', 'singleUser')->name('show.User');
        Route::get('/user/{id}/update', 'updateUser')->name('update.User');
        Route::get('/user/{id}/delete', 'deleteUser')->name('delete.User');
    });

});
