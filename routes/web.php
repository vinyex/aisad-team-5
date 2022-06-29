<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('/form-client', function () {
    return view('form-client');
})->name('form-client');

Route::get('/form-unit', function () {
    return view('form-unit');
})->name('form-unit');

Route::get('/list-ads', function () {
    return view('dashboard.list-ads');
})->name('list-ads');

Route::get('/list-rent', function () {
    return view('dashboard.list-rent');
})->name('list-rent');

