<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('admin', [AdminController::class, 'admin_panel']);
