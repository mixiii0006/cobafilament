<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
// routes/web.php
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

