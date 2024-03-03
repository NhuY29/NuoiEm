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
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu, không được rỗng';
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
    public function search(Request $request)
    {
        $query = $request->input('search-items-name');
        $allBenThu3Records = BenThu3::where('Ten', 'like', '%'.$query.'%')->get(); // Thay YourModel và column_name bằng tên mô hình và tên cột của bạn
        return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
    }
    public function hienThiForm()
    {
        return view('NL_BenThu3');
    }
    public function delete($id)
    {
        $record = BenThu3::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = BenThu3::findOrFail($id);
        return view('NL_BenThu3', compact('record'));
    }

    public function update(Request $request, $id)
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
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = BenThu3::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
}
