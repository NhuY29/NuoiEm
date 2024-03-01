<?php

namespace App\Http\Controllers;

use App\Models\BenThu3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BenThu3Controller extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'GioiTinh' => 'required|string',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|numeric|digits:10', 
            'NgheNghiep' => 'required|string|max:255',
            'NoiCongTac' => 'required|string|max:255',
        ]);
        
if ($validator->fails()) {
    $errors = $validator->errors();

    // Kiểm tra lỗi cho từng trường
    if ($errors->has('SDT')) {
        $errorMessage = 'Số điện thoại phải chứa đúng 10 chữ số và chỉ chấp nhận số.';
    } else {
        $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
    }

    // Trả về một script JavaScript thông báo lỗi
    return redirect()->back()->with('alert', $errorMessage)->withInput();
}

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
