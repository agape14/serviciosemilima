<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {    return view('welcome');});
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');
