<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|definindo as rotas do sistema| */

/*
Route::get(
    '/login',
    'UserController@login'
)->name('login');
Route::get(
    '/',
    'UserController@index'
)->name('index');

Route::post(
    '/create-user',
    'UserController@store'
)->name('create-user');*/

Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::post('/create-user', [UserController::class, 'store'])->name('create-user');
