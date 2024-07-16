<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluhanPelangganController;
Route::get('/', [KeluhanPelangganController::class,'index']);
Route::post('/', [KeluhanPelangganController::class,'store']);
Route::get('/tabel', [KeluhanPelangganController::class,'tabel']);
Route::get('/tabel/{keluhan:id}/edit', [KeluhanPelangganController::class,'edit']);
Route::post('/tabel/{keluhan:id}/edit', [KeluhanPelangganController::class,'update']);
Route::post('/delete/{keluhan_pelanggan:id}', [KeluhanPelangganController::class,'delete']);
