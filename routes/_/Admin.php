<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SubMenuController;
use Illuminate\Support\Facades\Route;

Route::resource('menu-induk', MenuController::class);
Route::resource('menu-tambahan', SubMenuController::class);