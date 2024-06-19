<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\ViewController;

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/riwayat', function () {
//     return view('riwayat');
// });

Route::get('/', [ViewController::class, 'viewHome'])->name('home');
Route::get('/riwayat', [ViewController::class, 'viewRiwayat'])->name('riwayat');
Route::get('/arikel', [ViewController::class, 'viewArtikel'])->name('artikel');
Route::get('/tentangkami', [ViewController::class, 'viewTentangkami'])->name('tentangkami');



Route::post('/addPengaduan', [PengaduanController::class, 'addPengaduan'])->name('data.addPengaduan');