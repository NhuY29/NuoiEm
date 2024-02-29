<?php

namespace App\Http\Controllers;

use App\Models\BenThu3;
use Illuminate\Http\Request;

class BenThu3Controller extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        // Validate the incoming data
       $ten = $request->get('Ten');
       $GioiTinh = $request->get('GioiTinh');
       $DiaChi = $request->get('DiaChi');
       $SDT = $request->get('SDT');
       $NgheNghiep = $request->get('NgheNghiep');
       $NoiCongTac = $request->get('NoiCongTac');
       BenThu3::create([
        'Ten' => $ten,
        'GioiTinh' => $GioiTinh,
        'DiaChi' => $DiaChi,
        'SDT' => $SDT,
        'NgheNghiep' => $NgheNghiep,
        'NoiCongTac' => $NoiCongTac

       ]);
       return redirect()->to("/save");
    }
    public function index()
    {
        // Lấy tất cả các bản ghi từ bảng BenThu3
        $allBenThu3Records = BenThu3::all();

     
        return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
    }
    public function hienThiForm()
    {
        return view('NL_BenThu3');
    }
}
