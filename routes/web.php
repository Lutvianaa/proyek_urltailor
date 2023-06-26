<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RumahjahitController;
use App\Http\Controllers\TailorController;
use App\Http\Controllers\StarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'hitung'])->name('home');
Route::get('/datauser', [App\Http\Controllers\DatauserController::class, 'index'])->name('datauser');

Route::resource("/mitra", MitraController::class);
Route::get('/mitra/{id}/edit', 'MitraController@edit')->name('mitra.edit');
Route::put('/mitra/{id}', 'MitraController@update')->name('mitra.update');
Route::delete('/mitra/{id}', 'MitraController@destroy')->name('mitra.destroy');

Route::resource("/layanan", LayananController::class);
Route::get('/layanan/{id}/edit', 'LayananController@edit')->name('layanan.edit');
Route::put('/layanan/{id}', 'LayananController@update')->name('layanan.update');
Route::delete('/layanan/{id}', 'LayananController@destroy')->name('layanan.destroy');

Route::resource("/rumahjahit", RumahjahitController::class);
Route::get('/rumahjahit/{id}/edit', 'RumahjahitController@edit')->name('rumahjahit.edit');
Route::put('/rumahjahit/{id}', 'RumahjahitController@update')->name('rumahjahit.update');
Route::delete('/rumahjahit/{id}', 'RumahjahitController@destroy')->name('rumahjahit.destroy');

Route::resource("/tailor", TailorController::class);
Route::get('/tailor/{id}/edit', 'TailorController@edit')->name('tailor.edit');
Route::put('/tailor/{id}', 'TailorController@update')->name('tailor.update');
Route::delete('/tailor/{id}', 'TailorController@destroy')->name('tailor.destroy');

Route::resource("/star", StarController::class);
Route::get('/star/{id}/edit', 'StarController@edit')->name('star.edit');
Route::put('/star/{id}', 'StarController@update')->name('star.update');
Route::delete('/star/{id}', 'StarController@destroy')->name('star.destroy');

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/profrumahjahit', function () {
    return view('profrumahjahit');
});
Route::get('/profstar', function () {
    return view('profstar');
});
Route::get('/proftailor', function () {
    return view('proftailor');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/data-user', function () {
    return view('datauser');
});