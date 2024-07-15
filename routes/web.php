<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluhanPelangganController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/input', [KeluhanPelangganController::class,'index']);
Route::post('/input', [KeluhanPelangganController::class,'store']);
Route::get('/tabel', [KeluhanPelangganController::class,'tabel']);
