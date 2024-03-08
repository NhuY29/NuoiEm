<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenThu3Controller;
use App\Http\Controllers\ToChucTuThienController;
use App\Http\Controllers\TreEmController;
use App\Http\Controllers\QuyController;

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
Route::get('/', function () {
    return view('index');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/save', [BenThu3Controller::class, 'index']);
Route::post('/save', [BenThu3Controller::class, 'xuLyDuLieu']);
Route::delete('/deleteBenThu3/{id}', [BenThu3Controller::class, 'delete']);
Route::get('/editBenThu3/{id}', [BenThu3Controller::class, 'edit']);
Route::put('/updateBenThu3/{id}', [BenThu3Controller::class, 'update']);
// Route::post('/search', [BenThu3Controller::class, 'search'])->name('search');
Route::match(['get', 'post'], '/search3', [BenThu3Controller::class, 'search'])->name('search3');
//Trang Tổ chức
Route::get('/ToChucTuThien', [ToChucTuThienController::class, 'index']);
Route::post('/ToChucTuThien', [ToChucTuThienController::class, 'xuLyDuLieu']);
Route::delete('/deleteToChucTuThien/{id}', [ToChucTuThienController::class, 'delete']);
Route::get('/editToChucTuThien/{id}', [ToChucTuThienController::class, 'edit']);
Route::put('/updateToChucTuThien/{id}', [ToChucTuThienController::class, 'update']);
Route::match(['get', 'post'], '/search1', [ToChucTuThienController::class, 'search'])->name('search1');
// Trang Trẻ Em
Route::get('/TreEm', [TreEmController::class, 'index']);
Route::post('/TreEm', [TreEmController::class, 'xuLyDuLieu']);
Route::delete('/deleteTreEm/{id}', [TreEmController::class, 'delete']);
Route::get('/editTreEm/{id}', [TreEmController::class, 'edit']);
Route::put('/updateTreEm/{id}', [TreEmController::class, 'update']);
Route::match(['get', 'post'], '/search2', [TreEmController::class, 'search'])->name('search2');
// Quỹ
Route::get('/Quy', [QuyController::class, 'index']);
Route::post('/Quy', [QuyController::class, 'xuLyDuLieu']);
Route::delete('/deleteQuy/{id}', [QuyController::class, 'delete']);
Route::get('/editQuy/{id}', [QuyController::class, 'edit']);
Route::put('/updateQuy/{id}', [QuyController::class, 'update']);
Route::match(['get', 'post'], '/searchQuy', [QuyController::class, 'search'])->name('searchQuy');
// Route::get('/save', [BenThu3Controller::class, 'hienThiForm']);
// Route::get('/NLBenThu3', function () {
//     return view('NL_BenThu3');
// });