<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\komentar;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\SendUndanganController;
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

// Route::get('/undanganku/{nama}/{alamat}', function ($nama , $alamat) {

//     $qrcode=QrCode::size(100)->generate($nama . $alamat);

//     return view('undanganku', compact('nama','alamat') ,['qrcode'=>$qrcode]);
// });

Route::get('/', function () {
    return view('master');
});
Route::get('/undanganku/{nama}/{alamat}', [SendUndanganController::class, 'undangan'])->name('undanganku');


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/komentar', [komentar::class, 'index'])->name('komentar');
Route::get('/scan', [ScanController::class, 'index'])->name('scan');


Route::get('/add-tamu/{nama}/{alamat}', [HomeController::class, 'addTamu']);