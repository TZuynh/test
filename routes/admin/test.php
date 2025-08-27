<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/users', [UserController::class, 'index'])->name('users.index');
