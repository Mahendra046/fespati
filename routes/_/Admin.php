<?php

use App\Http\Controllers\Admin\Konten\JPGController;
use App\Http\Controllers\Admin\Konten\PDFController;
use App\Http\Controllers\Admin\Konten\TeksController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SubMenuController;
use Illuminate\Support\Facades\Route;

Route::resource('menu-induk', MenuController::class);
Route::resource('menu-tambahan', SubMenuController::class);
Route::resource('konten-jpg', JPGController::class);
Route::resource('konten-pdf', PDFController::class);
Route::resource('konten-teks', TeksController::class);