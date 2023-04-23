<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "xin chào các bạn !!!";
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/test', function () {
    return view('admin.test');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/password', function () {
    return view('admin.password');
});