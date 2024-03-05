<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\BenThu3;

class TreEmController extends Controller
{
    //
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'GioiTinh' => 'required|string',
            'TenTruongHoc' => 'required|string|max:255',
            'DiaChi' => 'required|string|max:255',
            'BenThu3_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('Ten')) {
                $errorMessage = 'Tên không được rỗng.';
            } else if ($errors->has('GioiTinh')) {
                $errorMessage = 'Giới tính không được rỗng.';
            } else if ($errors->has('TenTruongHoc')) {
                $errorMessage = 'Tên trường học không được rỗng.';
            } else if ($errors->has('DiaChi')) {
                $errorMessage = 'Địa chỉ không được rỗng.';
            } else if ($errors->has('BenThu3_id')) {
                $errorMessage = 'Bên thứ 3 không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }

        // Validate the incoming data
        $ten = $request->get('Ten');
        $GioiTinh = $request->get('GioiTinh');
        $TenTruongHoc = $request->get('TenTruongHoc');
        $DiaChi = $request->get('DiaChi');
        $BenThu3_id = $request->get('BenThu3_id');
        TreEm::create([
            'Ten' => $ten,
            'GioiTinh' => $GioiTinh,
            'TenTruongHoc' => $TenTruongHoc,
            'DiaChi' => $DiaChi,
            'BenThu3_id' => $BenThu3_id,

        ]);
        return redirect()->to("/TreEm")->with('alert', 'Đã thêm thành công');
    }
    public function index2()
    {
        $allTreEmRecords = TreEm::paginate(5);
    return view('TreEm', compact('allTreEmRecords'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function index()
{
    $allBenThu3Records = BenThu3::all();

    return view('TreEm', compact('allBenThu3Records'));
}
    //phan trang
    public function search(Request $request)
    {
        // $query = $request->input('search-items-name');
        // $allBenThu3Records = BenThu3::where('Ten', 'like', '%'.$query.'%')->paginate(3);; // Thay YourModel và column_name bằng tên mô hình và tên cột của bạn
        // return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
        $query = $request->input('search-items-name');
        $allTreEmRecords = TreEm::where('Ten', 'like', '%'.$query.'%')->paginate(5);
        $i = 0; // Start counter at 1
    
        return view('TreEm', [
            'allTreEmRecords' => $allTreEmRecords,
            'i' => $i, // Pass the counter variable
        ]);
      
    }
    public function hienThiForm()
    {
        return view('TreEm');
    }
    public function delete($id)
    {
        $record = TreEm::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = TreEm::findOrFail($id);
        return view('TreEm', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'GioiTinh' => 'required|string',
            'TenTruongHoc' => 'required|string|max:255',
            'DiaChi' => 'required|string|max:255',
            'BenThu3_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = TreEm::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
}
