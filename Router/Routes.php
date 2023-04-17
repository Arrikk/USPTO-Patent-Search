<?php

use App\Controllers\Finance\Wallets\Wallets;
use Core\Router\Router as Route;
Route::get('', 'home@index');
Route::post('', 'home@setlogin');
Route::get('logout', 'home@logout');

// Auth Route
Route::post('register', 'users@register@auth');

// Password
Route::put('password/change', 'password@change@auth');
Route::post('password/forgot', 'password@forgot@auth');
Route::post('password/reset', 'password@reset@auth');
Route::get('password/token/{token:[\da-f]+}', 'password@token@auth');

// Profile
Route::get('profile', 'account@profile');
Route::put('profile', 'account@update');

// MY

Route::get('my/wallets', [Wallets::class, 'wallet-balance']);

// Finance Routes
Route::get('wallets', [Wallets::class, 'get']);
Route::post('wallets', [Wallets::class, 'create']);
Route::post('credit', [Wallets::class, 'credit']);
Route::post('debit', [Wallets::class, 'debit']);


Route::get('search', 'search@index@search');
Route::post('search/ajax', 'search@ajax@search');



