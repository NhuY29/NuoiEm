<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\Baiviet;
use App\Models\User;
use App\Models\HinhAnh;
use App\Models\Nguoinhannuoi;
use App\Models\UserModel;
class NguoiNhanNuoiController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'HoTen' => 'required|string|max:255',
            'TreEm_id' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'CCCD' => 'required|string|max:255',
            'SDT' => 'required|string|max:255',
            'NgheNghiep' => 'required|string|max:255',
            'DiaChi' => 'required|string|max:255',
            'ThuNhapTrungBinh' => 'required|numeric|max:999999999',
        ]);
    
        // Nếu validation không thành công, redirect về trang trước đó với thông báo lỗi
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Lấy thông tin từ request
        $HoTen = $request->input('HoTen');
        $TreEm_id = $request->input('TreEm_id');
        $Email = $request->input('Email');
        $CCCD = $request->input('CCCD');
        $SDT = $request->input('SDT');
        $NgheNghiep = $request->input('NgheNghiep');
        $DiaChi = $request->input('DiaChi');
        $ThuNhapTrungBinh = $request->input('ThuNhapTrungBinh');
    
        // Kiểm tra xem trong bảng Nguoinhannuoi đã có bài viết nào có tre_em_id tương tự hay chưa
        $existingNguoinhannuoi = Nguoinhannuoi::where('TreEm_id', $TreEm_id)
        ->where('isDelete', 0)
        ->exists();
        // Nếu đã tồn tại bài viết có tre_em_id tương tự, không thêm mới
        if ($existingNguoinhannuoi) {
            return redirect()->back()->with('error', 'Bài viết với tre_em_id này đã tồn tại.');
        }
    
        // Nếu không có bài viết nào có tre_em_id tương tự, thêm mới bài viết
        Nguoinhannuoi::create([
            'HoTen' => $HoTen,
            'TreEm_id' => $TreEm_id,
            'Email' => $Email,
            'CCCD' => $CCCD,
            'SDT' => $SDT,
            'NgheNghiep' => $NgheNghiep,
            'DiaChi' => $DiaChi,
            'ThuNhapTrungBinh' => $ThuNhapTrungBinh,
        ]);
    
        return redirect()->to("/Nguoinhannuoi");
    }
    
        public function index()
        {
            // Lấy tất cả các bản ghi từ bảng BenThu3
            // $allBenThu3Records = BenThu3::all();
            $allNguoinhannuoiRecords =  Nguoinhannuoi::where('isDelete', false)->paginate(5);
            $allUerRecords = User::where('isDelete', false)->paginate(5);
            $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        return view('Nguoinhannuoi', compact('allNguoinhannuoiRecords',"allTreEmRecords","allUerRecords"))->with('i',(request()->input('page',1)-1)*5);
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
            $allNguoinhannuoiRecords =Nguoinhannuoi::where('HoTen', 'like', '%'.$query.'%')
            ->where('isDelete', false) // Chỉ lấy các bản ghi có isDelete là false
            ->paginate(5);
            $i = 0; // Start counter at 1
            $allUerRecords = User::where('isDelete', false)->paginate(5);
            $allTreEmRecords = TreEm::where('isdelete', 0)->get();
            return view('Nguoinhannuoi', [
                'allNguoinhannuoiRecords' =>  $allNguoinhannuoiRecords,
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
           
        
            // Retrieve the associated Nguoinhannuoi record
            $Nguoinhannuoi = Nguoinhannuoi::where('TreEm_id', $id)->first();
        
            // Pass the retrieved data to the view
            return view('ThongTinChiTiet', compact('treem', 'anhTreEm', 'Nguoinhannuoi'));
        }
        
        
        public function delete($id)
        {
            $record = Nguoinhannuoi::findOrFail($id);
            // $record->delete();
            $record->update(['isDelete' => 1]);
            return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
        }
        public function edit($id)
        {
            $record = Nguoinhannuoi::findOrFail($id);
            return view('Nguoinhannuoi', compact('record'));
        }
    
        public function update(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'HoTen' => 'required|string|max:255',
                'TreEm_id' => 'required|string|max:255',
                'Email' => 'required|string|max:255',
                'CCCD' => 'required|string|max:255',
                'SDT' => 'required|string|max:255',
                'NgheNghiep' => 'required|string|max:255',
                'DiaChi' => 'required|string|max:255',
                'ThuNhapTrungBinh' => 'required|numeric|max:999999999',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $record = Nguoinhannuoi::findOrFail($id);
            
            $record->update($request->all());
              
            return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
        }
        public function getData()
    {
        $benthu3Data = Nguoinhannuoi::all();
        return response()->json($benthu3Data);
    }
}
