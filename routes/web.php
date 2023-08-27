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
    return view('index');
});

Route::get('/berita', function () {
    return view('berita.index');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});
