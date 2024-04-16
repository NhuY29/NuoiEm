<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThongTinTreEmCanHoTroController extends Controller
{
public function xuLyDuLieu(Request $Request ){
$tennguoigui = $Request->get('TenNguoiGui');
$email = $Request->get('Email');
$tenbe = $Request->get('TenBe');
$chontep = $Request->get('ChonTep');
}
}
