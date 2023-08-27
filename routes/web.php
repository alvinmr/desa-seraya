<?php

use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/visi-misi', [LandingController::class, 'visi_misi']);
Route::get('/pemerintahan', [LandingController::class, 'pemerintahan']);
Route::get('/sejarah', [LandingController::class, 'sejarah']);
Route::get('/wilayah', [LandingController::class, 'wilayah']);
Route::get('/lembaga', [LandingController::class, 'lembaga']);

// custom page based on slug from database
Route::get('/{slug}', [LandingController::class, 'page']);
