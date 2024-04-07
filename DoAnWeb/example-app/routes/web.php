<?php

use App\Http\Controllers\BaiVietController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenThu3Controller;
use App\Http\Controllers\ToChucTuThienController;
use App\Http\Controllers\TreEmController;
use App\Http\Controllers\QuyController;
use App\Http\Controllers\QuyCaNhanController;
use App\Http\Controllers\UserController;

use App\Models\User;
use App\Models\Roles;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
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
Route::get('/chuyenkhoan', function () {
    return view('ThongTinChuyenKhoan');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/danhsachtreem', [TreEmController::class, 'Ds']);
//user
Route::get('/User', [UserController::class, 'index']);
Route::post('/User', [UserController::class, 'xuLyDuLieu']);
Route::delete('/deleteUser/{id}', [UserController::class, 'delete']);
Route::get('/editUser/{id}', [UserController::class, 'edit']);
Route::put('/updateUser/{id}', [UserController::class, 'update']);
Route::match(['get', 'post'], '/searchUser', [UserController::class, 'search'])->name('searchUser');
//login
Route::get('/', [UserController::class, 'Loginsss']);
Route::get('/Logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login'])->name('login');

// Route::post('/register', [UserController::class, 'register']);

Route::get('/Resgisted', function () {
    return view('Resgisted');
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
Route::get('/export-excel', [TreEmController::class, 'exportToExcel'])->name('export.excel');
// Quỹ
Route::get('/Quy', [QuyController::class, 'index']);
Route::post('/Quy', [QuyController::class, 'xuLyDuLieu']);
Route::delete('/deleteQuy/{id}', [QuyController::class, 'delete']);
Route::get('/editQuy/{id}', [QuyController::class, 'edit']);
Route::put('/updateQuy/{id}', [QuyController::class, 'update']);
Route::match(['get', 'post'], '/searchQuy', [QuyController::class, 'search'])->name('searchQuy');
// Quỹ Cá Nhân
Route::get('/QuyCaNhan', [QuyCaNhanController::class, 'index']);
Route::post('/QuyCaNhan', [QuyCaNhanController::class, 'xuLyDuLieu']);
Route::delete('/deleteQuyCaNhan/{id}', [QuyCaNhanController::class, 'delete']);
Route::get('/editQuyCaNhan/{id}', [QuyCaNhanController::class, 'edit']);
Route::put('/updateQuyCaNhan/{id}', [QuyCaNhanController::class, 'update']);
Route::match(['get', 'post'], '/searchQuyCaNhan', [QuyCaNhanController::class, 'search'])->name('searchQuyCaNhan');
// Route::get('/save', [BenThu3Controller::class, 'hienThiForm']);
// Route::get('/NLBenThu3', function () {
//     return view('NL_BenThu3');
// });
// Bài Viết 
Route::get('/BaiViet', [BaiVietController::class, 'index']);
Route::post('/BaiViet', [BaiVietController::class, 'xuLyDuLieu']);
Route::delete('/deleteBaiViet/{id}', [BaiVietController::class, 'delete']);
Route::get('/editBaiViet/{id}', [BaiVietController::class, 'edit']);
Route::put('/updateBaiViet/{id}', [BaiVietController::class, 'update']);
Route::match(['get', 'post'], '/searchBaiViet', [BaiVietController::class, 'search'])->name('searchBaiViet');


Route::post('/export-excel', [TreEmController::class, 'export'])->name('export.excel');