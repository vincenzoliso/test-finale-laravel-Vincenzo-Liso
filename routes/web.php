<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SingerController;

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

//rotta homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//rotte cantanti
Route::get('/singer/create', [SingerController::class, 'createSinger'])->name('singer.create');
Route::post('/singer/store', [SingerController::class, 'storeSinger'])->name('singer.store');


//rotte canzoni
Route::get('/song/create', [SongController::class, 'createSong'])->name('song.create');
Route::post('/song/store', [SongController::class, 'storeSong'])->name('song.store');
