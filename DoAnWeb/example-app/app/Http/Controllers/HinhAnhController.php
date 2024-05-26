<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\HinhAnh;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\BenThu3;
use App\Models\Baiviet;
use App\Models\ThongTinTam;
use Illuminate\Support\Facades\Log;
use Cloudinary\Api\Upload\UploadApi;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
class HinhAnhController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        

        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4|max:20480', // Thay đổi các quy tắc validation tùy theo nhu cầu của bạn
        ]);
    
        // Upload file to Cloudinary
        $upload = cloudinary()->upload($request->file('file')->getRealPath());
        $secureUrl = $upload->getSecurePath(); // Lấy URL an toàn
    
        // Chuyển đổi URL an toàn sang URL HTTP
        $httpUrl = str_replace("https://", "http://", $secureUrl);
    
        // Lấy các thông tin khác từ request
        $ChuThich = $request->input('ChuThich');
        $BaiViet_id = $request->input('BaiViet_id');
        $TreEm_id = $request->input('TreEm_id');
        $existingHinhAnh = HinhAnh::where('TreEm_id', $TreEm_id)
        ->where('isDelete', 0)
        ->exists();
        // Nếu đã tồn tại bài viết có tre_em_id tương tự, không thêm mới
        if ($existingHinhAnh) {
            return redirect()->back()->with('error', 'Bài viết với tre_em_id này đã tồn tại.');
        }
        // Tạo một bản ghi mới trong cơ sở dữ liệu
        HinhAnh::create([
            'DuongDan' => $httpUrl,
            'ChuThich' => $ChuThich,
            'BaiViet_id' => $BaiViet_id,
            'TreEm_id' => $TreEm_id,
        ]);
    
        // Chuyển hướng người dùng đến trang sau khi xử lý dữ liệu thành công
        return redirect()->to("/HinhAnh");
       
    
        // Create a new record in the database
    }
    public function index()
    {
        $allHinhAnhRecords = HinhAnh::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        $allBaiVietRecords = BaiViet::where('isdelete', 0)->get();
        return view('HinhAnh', compact('allHinhAnhRecords', 'allTreEmRecords', 'allBaiVietRecords'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //phan trang

//search
    public function search(Request $request)
    {
        $query = $request->input('search-items-name');
        $allHinhAnhRecords = HinhAnh::whereHas('treEm', function($q) use ($query) {
            $q->where('Ten', 'like', '%' . $query . '%');
        })
        ->where('isDelete', false) // Chỉ lấy các bản ghi có isDelete là false
        ->paginate(5);
        $i = 0; // Start counter at 1
        $allBaiVietRecords = BaiViet::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        return view('HinhAnh', [
            'allHinhAnhRecords' =>  $allHinhAnhRecords,
            'allBaiVietRecords' =>  $allBaiVietRecords,
            'allTreEmRecords' =>  $allTreEmRecords,
            'i' => $i, // Pass the counter variable
        ]);
      
    }

    public function hienThiForm()
    {
        return view('HinhAnh');
    }
    public function delete($id)
    {
        $record = HinhAnh::findOrFail($id);
        // $record->delete();
        $record->update(['isDelete' => 1]);
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = HinhAnh::findOrFail($id);
        return view('HinhAnh', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'DuongDan' => 'required|file|mimes:jpg,jpeg,png,gif|max:10240', // Điều chỉnh quy tắc cho 'DuongDan' để đảm bảo đây là một file hình ảnh
            'ChuThich' => 'required|string|max:255',
            'BaiViet_id' => 'required|string|max:255',
            'TreEm_id' => 'required|string|max:255', // Điều chỉnh loại cho 'TreEm_id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = HinhAnh::findOrFail($id);
        $oldImageUrl = $record->DuongDan;

        if ($request->hasFile('DuongDan')) {
            // Tải ảnh mới lên Cloudinary
            $upload = Cloudinary::upload($request->file('DuongDan')->getRealPath());
            $secureUrl = $upload->getSecurePath(); // Lấy URL an toàn

            // Cập nhật URL mới vào bản ghi
            $record->DuongDan = $secureUrl;

            // Xóa ảnh cũ khỏi Cloudinary
            if ($oldImageUrl) {
                $publicId = basename($oldImageUrl, '.' . pathinfo($oldImageUrl, PATHINFO_EXTENSION));
                Cloudinary::destroy($publicId);
            }
        }

        // Cập nhật các trường khác
        $record->ChuThich = $request->input('ChuThich');
        $record->BaiViet_id = $request->input('BaiViet_id');
        $record->TreEm_id = $request->input('TreEm_id');
        $record->save();

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }


    public function upload(Request $request)
{
   
    $upload = cloudinary()->upload($request->file('file')->getRealPath());
    $secureUrl = $upload->getSecurePath(); // Lấy URL an toàn

    // Chuyển đổi URL an toàn sang URL HTTP
    $httpUrl = str_replace("https://", "http://", $secureUrl);
    // Validate the input from the user
    $NoiDung= $request->input('NoiDung');
    $TenBe= $request->input('TenBe');
    $Email= $request->input('Email');
    $HotenNguoi3= $request->input('HotenNguoi3');
    $to_name = "Le Quang Bao";
    $data = array(
        "email" => $Email,
        "name" =>  $TenBe,
       
    );

    Mail::send("Gmmail", $data, function($message) use ($to_name, $Email, $data) {
        $message->to($Email, $to_name)->subject("Test mail nhan nuoi tre em");
        $message->from($data['email'], $data['name']);
      
    });

    // Create a new image record in the database
    ThongTinTam::create([
        'HinhAnh' =>  $httpUrl,
        'NoiDung' => $NoiDung,
        'TenBe' => $TenBe,
        'Email' => $Email,
        'HotenNguoi3' => $HotenNguoi3,
    ]);

    return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
}
    public function Ds()
    {
        $allTreEmRecords = TreEm::with('benThu3')->paginate(1000);
        $allHinhAnhRecords = HinhAnh::where('isdelete', 0)->get();

        return view('danhsachtreem', compact('allTreEmRecords', 'allHinhAnhRecords'));
    }


    public function Information(Request $request)
    {
      // Lấy dữ liệu từ request
      $Ten = $request->input('Ten');
    $DiaChi = $request->input('DiaChi');
    $Sdt = $request->input('Sdt');
    $NgheNghiep = $request->input('NgheNghiep');
    $NoiCongTac = $request->input('NoiCongTac');

    BenThu3::create([
        'Ten' => $Ten,
        'GioiTinh' => "1", // Giả sử giới tính là 1 (nam), bạn có thể thay đổi tùy theo yêu cầu
        'DiaChi' => $DiaChi,
        'SDT' => $Sdt,
        'NgheNghiep' => $NgheNghiep,
        'NoiCongTac' => $NoiCongTac
    ]);
      return "oke";
    }
    public function Informationd(){
return view('Thongtinbenthu3');
    }
}

