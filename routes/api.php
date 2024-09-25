<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::post('/persegi', [App\Http\Controllers\Api\PersegiController::class , 'hitungPersegi']);
Route::post('/lingkaran', [App\Http\Controllers\Api\LingkaranController::class , 'hitungluasLingkaran']);
Route::post('/kelilinglingkaran', [App\Http\Controllers\Api\KelilingLingkaranController::class , 'hitungKelilingLingkaran']);
Route::post('/luaspersegipanjang', [App\Http\Controllers\Api\LuasPersegiPanjangController::class , 'hitungLuasPersegiPanjang']);
Route::post('/kelilingpersegipanjang', [App\Http\Controllers\Api\KelilingPersegiPanjangController::class , 'hitungkelilingPersegiPanjang']);
Route::post('/luassegitiga', [App\Http\Controllers\Api\LuasSegitigaController::class , 'hitungLuasSegitiga']);
Route::post('/kelilingsegitiga', [App\Http\Controllers\Api\KelilingSegitigaController::class , 'hitungKelilingSegitiga']);
Route::post('/volumekubus', [App\Http\Controllers\Api\VolumeKubusController::class , 'hitungVolumeKubus']);
Route::post('/luaspermukaankubus', [App\Http\Controllers\Api\LuasPermukaanKubusController::class , 'hitungLuasPermukaanKubus']);