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
    return view('welcome');
});
 
Route::get('/About', function () {
    return view('About');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Spesial', function () {
    return view('Spesial');
});

Route::get('/Menu', function () {
    return view('Menu');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/Checkout', function () {
    return view('Checkout');
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/promosi', function () {
    return view('promosi');
});

Route::get('/loginAdmin2', function () {
    return view('loginAdmin2');
});
