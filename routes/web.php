<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::get('/asesoria', [WebController::class, 'consultancies'])->name('web.services.consultancies');
Route::get('/administracion', [WebController::class, 'administration'])->name('web.services.administration');
Route::get('/saneamiento', [WebController::class, 'sanitation'])->name('web.services.sanitation');
Route::get('/subasta', [WebController::class, 'auction'])->name('web.services.auction');
Route::get('/buscar', [WebController::class, 'search'])->name('web.search');