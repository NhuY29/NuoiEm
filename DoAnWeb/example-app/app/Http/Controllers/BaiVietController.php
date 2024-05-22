<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\Baiviet;
use App\Models\User;
use App\Models\HinhAnh;
use App\Models\UserModel;

class BaiVietController extends Controller
{
    public function xuLyDuLieu(Request $request)
{
    $validator = Validator::make($request->all(), [
        'TieuDe' => 'required|string|max:255',
        'TreEm_id' => 'required|string|max:255',
        'NoiDung' => 'required|string|max:255',
        'user_id' => 'required|string|max:255',
    ]);

    // Nếu validation không thành công, redirect về trang trước đó với thông báo lỗi
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Lấy thông tin từ request
    $TieuDe = $request->input('TieuDe');
    $TreEm_id = $request->input('TreEm_id');
    $NoiDung = $request->input('NoiDung');
    $NgayDang = $request->input('NgayDang');
    $user_id = $request->input('user_id');

    // Kiểm tra xem trong bảng Baiviet đã có bài viết nào có tre_em_id tương tự hay chưa
    $existingBaiViet = Baiviet::where('TreEm_id', $TreEm_id)
    ->where('isDelete', 0)
    ->exists();
    // Nếu đã tồn tại bài viết có tre_em_id tương tự, không thêm mới
    if ($existingBaiViet) {
        return redirect()->back()->with('error', 'Bài viết với tre_em_id này đã tồn tại.');
    }

    // Nếu không có bài viết nào có tre_em_id tương tự, thêm mới bài viết
    Baiviet::create([
        'TieuDe' => $TieuDe,
        'TreEm_id' => $TreEm_id,
        'NoiDung' => $NoiDung,
        'NgayDang' => $NgayDang,
        'user_id' => $user_id,
    ]);

    return redirect()->to("/BaiViet");
}

    public function index()
    {
        // Lấy tất cả các bản ghi từ bảng BenThu3
        // $allBenThu3Records = BenThu3::all();
        $allBaiVietRecords = Baiviet::where('isDelete', false)->paginate(5);
        $allUerRecords = User::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
    return view('BaiViet', compact('allBaiVietRecords',"allTreEmRecords","allUerRecords"))->with('i',(request()->input('page',1)-1)*5);
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
        $allBaiVietRecords =Baiviet::where('TieuDe', 'like', '%'.$query.'%')
        ->where('isDelete', false) // Chỉ lấy các bản ghi có isDelete là false
        ->paginate(5);
        $i = 0; // Start counter at 1
        $allUerRecords = User::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        return view('BaiViet', [
            'allBaiVietRecords' =>  $allBaiVietRecords,
            'allUerRecords' =>  $allUerRecords,
            'allTreEmRecords' =>  $allTreEmRecords,
            'i' => $i, // Pass the counter variable
        ]);
      
    }

    public function hienThiThongTinTreEm($id)
    {
        // Retrieve the TreEm record based on the ID
        $treem = TreEm::findOrFail($id);
    
        // Retrieve the associated HinhAnh record
        $anhTreEm = HinhAnh::where('TreEm_id', $id)->first();
    
        // Retrieve the associated BaiViet record
        $baiviet = BaiViet::where('TreEm_id', $id)->first();
    
        // Pass the retrieved data to the view
        return view('ThongTinChiTiet', compact('treem', 'anhTreEm', 'baiviet'));
    }
    
    
    public function delete($id)
    {
        $record = Baiviet::findOrFail($id);
        // $record->delete();
        $record->update(['isDelete' => 1]);
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = Baiviet::findOrFail($id);
        return view('BaiViet', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'TieuDe' => 'required|string|max:255',
            'TreEm_id' => 'required|string|max:255',
            'NoiDung' => 'required|string|max:255',
            'NgayDang' => 'required|date',
            'user_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = Baiviet::findOrFail($id);
        
        $record->update($request->all());
          
        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
    public function getData()
{
    $benthu3Data = Baiviet::all();
    return response()->json($benthu3Data);
}
}
