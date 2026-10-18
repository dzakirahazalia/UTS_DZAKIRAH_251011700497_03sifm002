<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('movies.home');
})->name('home');

Route::get('/profil', function () {
    return view('movies.profil');
})->name('profil');

Route::get('/katalog', [MovieController::class, 'index'])
    ->name('movies.index');

Route::get('/film/{id}', [MovieController::class, 'show'])
    ->whereNumber('id')
    ->name('movies.show');

Route::get('/genre', [MovieController::class, 'genre'])
    ->name('genre');

Route::get('/film-tambahan/{judul}', [
    MovieController::class,
    'detailTambahan'
])->name('movies.detail-tambahan');

Route::get('/tentang', function () {
    return view('movies.tentang');
})->name('tentang');