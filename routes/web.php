<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {    return view('welcome');});
Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/subasta', function () {
    return view('pages.subasta');
})->name('subasta');
