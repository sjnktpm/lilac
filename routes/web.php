<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('users', [UserController::class, 'index']);
Route::get('get-users', [UserController::class, 'getUsers'])->name('users.getUsers');
