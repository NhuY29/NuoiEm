<?php

namespace App\Http\Controllers;

use App\Models\BenThu3;
use App\Models\TreEm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
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
        // $allBenThu3Records = BenThu3::all();
        $allBenThu3Records = BenThu3::where('isDelete', false)->paginate(5);
    return view('NL_BenThu3', compact('allBenThu3Records'))->with('i',(request()->input('page',1)-1)*5);
        // return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
    }
    //phan trang

//search
    public function search(Request $request)
    {
        // $query = $request->input('search-items-name');
        // $allBenThu3Records = BenThu3::where('Ten', 'like', '%'.$query.'%')->paginate(3);; // Thay YourModel và column_name bằng tên mô hình và tên cột của bạn
        // return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
        $query = $request->input('search-items-name');
        $allBenThu3Records = BenThu3::where('Ten', 'like', '%'.$query.'%')
        ->where('isDelete', false) // Chỉ lấy các bản ghi có isDelete là false
        ->paginate(5);
        $i = 0; // Start counter at 1
    
        return view('NL_BenThu3', [
            'allBenThu3Records' => $allBenThu3Records,
            'i' => $i, // Pass the counter variable
        ]);
      
    }

    public function hienThiForm()
    {
        return view('NL_BenThu3');
    }
    public function delete($id)
    {
        $record = BenThu3::findOrFail($id);
        // $record->delete();
        $record->update(['isDelete' => 1]);
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
    public function getData()
{
    $benthu3Data = Benthu3::all();
    return response()->json($benthu3Data);
}

public function redirectToOtherPage(Request $request) {
    $treem_id = $request->input('treem_id');
    // Thực hiện các thao tác bạn cần với $treem_id
    // Ví dụ:
    $treem = TreEm::find($treem_id);
    $allTreEmRecords = TreEm::all();
    if ($treem) {
        // Nếu tìm thấy trẻ em, bạn có thể thực hiện thêm các thao tác khác ở đây
        // Ví dụ: trả về một view hiển thị thông tin của trẻ em
        return view('thongtinnguoi', ['treem' => $treem] , ['allTreEmRecords' => $allTreEmRecords]);
    } else {
        // Nếu không tìm thấy trẻ em, bạn có thể xử lý tùy ý ở đây, ví dụ:
        return redirect()->back()->with('error', 'Không tìm thấy trẻ em');
    }
}
}
