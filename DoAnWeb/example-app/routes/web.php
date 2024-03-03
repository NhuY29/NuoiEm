<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenThu3Controller;
use App\Http\Controllers\ToChucTuThienController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function () {
    return view('home');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/Loginss', function () {
    return view('Loginss');
});
Route::get('/save', [BenThu3Controller::class, 'index']);
Route::post('/save', [BenThu3Controller::class, 'xuLyDuLieu']);
Route::delete('/delete/{id}', [BenThu3Controller::class, 'delete']);
Route::get('/edit/{id}', [BenThu3Controller::class, 'edit']);
Route::put('/update/{id}', [BenThu3Controller::class, 'update']);
Route::post('/search', [BenThu3Controller::class, 'search'])->name('search');
//Trang Tổ chức
Route::get('/ToChucTuThien', [ToChucTuThienController::class, 'index']);
Route::post('/ToChucTuThien', [ToChucTuThienController::class, 'xuLyDuLieu']);
Route::delete('/delete/{id}', [ToChucTuThienController::class, 'delete']);
Route::get('/edit/{id}', [ToChucTuThienController::class, 'edit']);
Route::put('/update/{id}', [ToChucTuThienController::class, 'update']);
// Route::get('/save', [BenThu3Controller::class, 'hienThiForm']);
// Route::get('/NLBenThu3', function () {
//     return view('NL_BenThu3');
// });