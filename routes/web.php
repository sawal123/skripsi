<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


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

Route::get('/undanganku/{nama}/{alamat}', function ($nama , $alamat) {

    $qrcode=QrCode::size(100)->generate($nama . $alamat);

    return view('undanganku', compact('nama','alamat') ,['qrcode'=>$qrcode]);
});

Route::get('/', function () {
    return view('master');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/komentar', [App\Http\Controllers\komentar::class, 'index'])->name('komentar');
Route::get('/bukutamu', [App\Http\Controllers\bukutamu::class, 'index'])->name('bukutamu');
Route::get('/undanganku/Hafizh/Lampung', [App\Http\Controllers\HomeController::class, 'undangan'])->name('undanganku');