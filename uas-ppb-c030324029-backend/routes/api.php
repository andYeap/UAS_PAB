<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#Tahun Akademik
Route::post('/tahun-akademik', [App\Http\Controllers\TahunAkademikController::class, 'store']);
Route::get('/tahun-akademik', [App\Http\Controllers\TahunAkademikController::class, 'getData']);
Route::delete('/tahun-akademik/{id}', [App\Http\Controllers\TahunAkademikController::class, 'destroy']);
Route::put('/tahun-akademik/{id}', [App\Http\Controllers\TahunAkademikController::class, 'update']);

#Register
Route::post('/register', App\Http\Controllers\RegisterController::class);

#Login
Route::post('/login', [ App\Http\Controllers\LoginController::class, 'Login']);

#Logout
Route::post('/logout', App\Http\Controllers\LogoutController::class);

#Profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show']);

#Kontak
Route::get('/kontak', [App\Http\Controllers\KontakApiController::class, 'index']);
Route::get('/kontak/{kontak}', [App\Http\Controllers\KontakApiController::class, 'show']);
Route::put('/kontak/{kontak}', [App\Http\Controllers\KontakApiController::class, 'update']);
Route::delete('/kontak/{kontak}', [App\Http\Controllers\KontakApiController::class, 'destroy']);