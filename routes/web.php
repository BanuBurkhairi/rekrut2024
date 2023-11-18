<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\AktivasiController;
use App\Http\Controllers\PengumumanController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
    Route::post('/admin/login', [AuthController::class, 'login']);

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/qna', [QnaController::class, 'index']);
    Route::get('/qna/tanya', [QnaController::class, 'create']);
    Route::post('/qna/store', [QnaController::class, 'store']);
    
    Route::get('/aktivasi', [AktivasiController::class, 'index']);
    Route::get('/aktivasi/create', [AktivasiController::class, 'create']);
    Route::post('/aktivasi/store', [AktivasiController::class, 'store']);

    Route::get('/pengumuman', [PengumumanController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('home');
    });
    Route::get('/admin/qna', [QnaController::class, 'admin']);
    Route::get('/qna/jawab/{id}', [QnaController::class, 'edit']);
    Route::put('/qna/update/{id}', [QnaController::class, 'update']);

    Route::get('/admin/aktivasi', [AktivasiController::class, 'admin']);
    Route::put('/aktivasi/update/{id}', [AktivasiController::class, 'update']);
    Route::delete('/aktivasi/delete/{id}', [AktivasiController::class, 'destroy']);
    
    Route::get('/admin/pengumuman', [PengumumanController::class, 'admin']);
    Route::post('/pengumuman/upload', [PengumumanController::class, 'import']);
    Route::delete('/pengumuman/delete', [PengumumanController::class, 'destroy']);

    Route::get('/home', function () {
        return view('logout');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});


