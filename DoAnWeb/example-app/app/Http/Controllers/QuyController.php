<?php

namespace App\Http\Controllers;

use App\Models\Quy;
use App\Models\TreEm;
use App\Models\ToChucTuThien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuyController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'TrangThai' => 'required|string|max:255',
            'TreEm_id' => 'required|string|max:255',
            'ToChucTuThien_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('Ten')) {
                $errorMessage = 'Tên không được rỗng.';
            } else if ($errors->has('MoTa')) {
                $errorMessage = 'Mô tả không được rỗng.';
            } else if ($errors->has('TrangThai')) {
                $errorMessage = 'Trạng thái không được rỗng.';
            } else if ($errors->has('TreEm_id')) {
                $errorMessage = 'trẻ em không được rỗng.';
            } else if ($errors->has('ToChucTuThien_id')) {
                $errorMessage = 'Tổ chức không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }


        // Validate the incoming data
        $ten = $request->get('Ten');
        $MoTa = $request->get('MoTa');
        $TrangThai = $request->get('TrangThai');
        $TreEm = $request->get('TreEm_id');
        $ToChuc = $request->get('ToChucTuThien_id');
        Quy::create([
            'Ten' => $ten,
            'MoTa' => $MoTa,
            'TrangThai' => $TrangThai,
            'TreEm_id' => $TreEm,
            'ToChucTuThien_id' => $ToChuc,

        ]);
        return redirect()->to("/Quy")->with('success', 'Đã thêm Quyỹ mới');
    }
    
    public function index()
    {
        $allQuyRecords = Quy::with('TreEm')->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        $allToChucTuThienRecords = ToChucTuThien::where('isdelete', 0)->get();

        return view('Quy', compact('allQuyRecords', 'allTreEmRecords',' allToChucTuThienRecords'))->with('i',(request()->input('page',1)-1)*5);
    }
    
    //phan trang

//search
    public function search(Request $request)
    {
        // $query = $request->input('search-items-name');
        // $allBenThu3Records = BenThu3::where('Ten', 'like', '%'.$query.'%')->paginate(3);; // Thay YourModel và column_name bằng tên mô hình và tên cột của bạn
        // return view('NL_BenThu3', ['allBenThu3Records' => $allBenThu3Records]);
        $query = $request->input('search-items-name');
        $allQuyRecords = Quy::where('Ten', 'like', '%'.$query.'%')
        ->where('isDelete', false) // Chỉ lấy các bản ghi có isDelete là false
        ->paginate(5);
        $i = 0; // Start counter at 1
    
        return view('Quy', [
            'allQuyRecords' => $allQuyRecords,
            'i' => $i, // Pass the counter variable
        ]);
      
    }

    public function hienThiForm()
    {
        return view('Quy');
    }
    public function delete($id)
    {
        $record = Quy::findOrFail($id);
        // $record->delete();
        $record->update(['isDelete' => 1]);
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = Quy::findOrFail($id);
        return view('Quy', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'MoTa' => 'required|string',
            'TrangThai' => 'required|string|max:255',
            'TreEm_id' => 'required|string|max:255',
            'ToChucTuThien_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = Quy::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
//     public function getData()
// {
//     $benthu3Data = Quy::all();
//     return response()->json($benthu3Data);
// }
}
