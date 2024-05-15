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
            'NgayDang' => 'required|date',
            'user_id' => 'required|string|max:255',

        ]);

        // if ($validator->fails()) {
        //     $errors = $validator->errors();

        //     // Kiểm tra lỗi cho từng trường
        //     if ($errors->has('TieuDe')) {
        //         $errorMessage = 'Thieu tieu de';
        //     }
        //      else {
        //         $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu, không được rỗng';
        //     }

        //     // Trả về một script JavaScript thông báo lỗi
        //     return redirect()->back()->with('alert', $errorMessage)->withInput();
        // }
        $treem = session('treem');
        $treem_id = $treem->id;
        $treem_name = $treem->Ten;

        // Validate the incoming data
        $TieuDe = $request->get('TieuDe');
        $TreEm_id = $request->get('TreEm_id');
        $NoiDung = $request->get('NoiDung');
        $NgayDang = $request->get('NgayDang');
        $user_id = $request->get('user_id');
   
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
        // Lấy thông tin của trẻ em từ model TreEm dựa trên ID
        $treem = TreEm::find($id);
    
        // Kiểm tra xem trẻ em có tồn tại không
        if ($treem) {
            // Lấy thông tin bài viết từ model Baiviet dựa trên ID
            $baiviet = Baiviet::findOrFail($id);
    
            // Lấy thông tin ảnh của trẻ em
            $anhTreEm = HinhAnh::where('TreEm_id', $id)->first();
    
            // Tiếp tục xử lý logic của bạn tại đây...
            return view('ThongTinChiTiet', ['treem' => $treem, 'anhTreEm' => $anhTreEm, 'baiviet' => $baiviet]);
        } else {
            // Xử lý trường hợp không tìm thấy thông tin của trẻ em
            return redirect()->back()->with('error', 'Không tìm thấy thông tin trẻ em.');
        }
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
