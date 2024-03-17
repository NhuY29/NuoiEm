<?php

namespace App\Http\Controllers;
use App\Models\QuyCaNhan;
use App\Models\TreEm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuyCaNhanController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'SoTien' => 'required|numeric',
            'TreEm_id' => 'required|string|max:255',
            'Ngay_gop' => 'required|date',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('SoTien')) {
                $errorMessage = 'Số tiền không được rỗng.';
            } else if ($errors->has('TreEm_id')) {
                $errorMessage = 'Trẻ em không được rỗng.';
            } else if ($errors->has('Ngay_gop')) {
                $errorMessage = 'Ngày không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }


        // Validate the incoming data
        $SoTien = $request->get('SoTien');
        $TreEm = $request->get('TreEm_id');
        $NgayGop = $request->get('Ngay_gop');
        QuyCaNhan::create([
            'SoTien' => $SoTien,
            'TreEm_id' => $TreEm,
            'Ngay_gop' => $NgayGop,

        ]);
        return redirect()->to("/QuyCaNhan")->with('success', 'Đã thêm Quỹ Cá Nhân mới');
    }
    
    public function index()
    {
        $allQuyCaNhanRecords = QuyCaNhan::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();

        return view('QuyCaNhan', compact('allQuyCaNhanRecords',"allTreEmRecords"))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    //phan trang

//search
public function search(Request $request)
{
    $query = $request->input('search-items-name');

    // Capture the outer scope's $query
    $capturedQuery = $query;
  
    $allQuyCaNhanRecords = QuyCaNhan::whereHas('treEm', function ($query) use ($capturedQuery) {
      $query->where('Ten', 'like', '%'.$capturedQuery.'%'); // Use capturedQuery here
    })
    ->where('isDelete', false)
    ->with('treEm')
    ->paginate(5);
    $i = 0; // Start counter at 1
    $allTreEmRecords = TreEm::where('isdelete', 0)->get();
    return view('QuyCaNhan', [
        'allQuyCaNhanRecords' => $allQuyCaNhanRecords,
        'allTreEmRecords' => $allTreEmRecords,
        'i' => $i, // Pass the counter variable
    ]);
  
}
    public function hienThiForm()
    {
        return view('QuyCaNhan');
    }
    public function delete($id)
    {
        $record = QuyCaNhan::findOrFail($id);
        $record->update(['isDelete' => 1]);
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = QuyCaNhan::findOrFail($id);
        return view('QuyCaNhan', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'SoTien' => 'required|int|max:255',
            'TreEm_id' => 'required|string|max:255',
            'Ngay_gop' => 'required|date|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = QuyCaNhan::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
}
