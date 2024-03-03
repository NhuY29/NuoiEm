<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ToChucTuThien;

class ToChucTuThienController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|numeric|digits:10',
            'Email' => 'required|email|max:255',
            'ThongTin' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('SDT')) {
                $errorMessage = 'Số điện thoại phải chứa đúng 10 chữ số và chỉ chấp nhận số.';
            } 
            else if($errors->has('Email')) {
                $errorMessage = 'Địa chỉ email phải chứa đúng định dạng email.';
            }
            else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu, không được rỗng';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }

        // Validate the incoming data
        $ten = $request->get('Ten');
        $MoTa = $request->get('MoTa');
        $DiaChi = $request->get('DiaChi');
        $SDT = $request->get('SDT');
        $Email = $request->get('Email');
        $ThongTin = $request->get('ThongTin');
        ToChucTuThien::create([
            'Ten' => $ten,
            'MoTa' => $MoTa,
            'DiaChi' => $DiaChi,
            'SDT' => $SDT,
            'Email' => $Email,
            'ThongTin' => $ThongTin

        ]);
        return redirect()->to("/ToChucTuThien")->with('alert', 'Đã thêm thành công');
    }
    public function index()
    {
        // Lấy tất cả các bản ghi từ bảng BenThu3
        $allToChucTuThienRecords = ToChucTuThien::all();


        return view('ToChucTuThien', ['allToChucTuThienRecords' =>  $allToChucTuThienRecords]);
    }
    public function hienThiForm()
    {
        return view('ToChucTuThien');
    }
    public function delete($id)
    {
        $record = ToChucTuThien::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = ToChucTuThien::findOrFail($id);
        return view('ToChucTuThien', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|numeric|digits:10',
            'Email' => 'required|email|max:255',
            'ThongTin' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = ToChucTuThien::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
}
