<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TinTuc;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class TinTucController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'HinhAnh' => 'required|string|max:255',
            'TieuDe' => 'required|string',
            'NoiDung' => 'required|string|max:255',
            'Link' => 'required|string|max:255',
        ]);

        $upload = cloudinary()->upload($request->file('file')->getRealPath());
        $secureUrl = $upload->getSecurePath(); // Lấy URL an toàn
    
        // Chuyển đổi URL an toàn sang URL HTTP
        $httpUrl = str_replace("https://", "http://", $secureUrl);

        // if ($validator->fails()) {
        //     $errors = $validator->errors();

        //     if ($errors->has('HinhAnh')) {
        //         $errorMessage = 'Hình ảnh không được rỗng.';
        //     } else if ($errors->has('TieuDe')) {
        //         $errorMessage = 'Tiêu đề không được rỗng.';
        //     } else if ($errors->has('NoiDung')) {
        //         $errorMessage = 'Nội dung không được rỗng.';
        //     } else {
        //         $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
        //     }

        //     return redirect()->back()->with('alert', $errorMessage)->withInput();
        // }

        // $HinhAnh = $request->get('HinhAnh');
        $TieuDe = $request->get('TieuDe');
        $NoiDung = $request->get('NoiDung');
        $Link = $request->get('Link');
        TinTuc::create([
            'HinhAnh' =>  $httpUrl,
            'TieuDe' => $TieuDe,
            'NoiDung' => $NoiDung,
            'Link' => $Link
        ]);
        return redirect()->to("/TinTuc");
    }

    public function index()
    {
        $allTinTucRecords = TinTuc::paginate(5);
        return view('TinTuc', compact('allTinTucRecords'));
    }
    public function DS()
    {
        $allTinTucRecords = TinTuc::all();
        return view('home', compact('allTinTucRecords'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search-items-name');
        $allTinTucRecords = TinTuc::where('TieuDe', 'like', '%' . $query . '%')->paginate(5);
        return view('TinTuc', compact('allTinTucRecords'));
    }

    public function hienThiForm()
    {
        return view('TinTuc');
    }

    public function delete($id)
    {
        $record = TinTuc::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công.');
    }

    public function edit($id)
    {
        $record = TinTuc::findOrFail($id);
        return view('TinTuc', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'HinhAnh' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240', // Điều chỉnh quy tắc cho 'HinhAnh' để đảm bảo đây là một file hình ảnh
            'TieuDe' => 'required|string',
            'NoiDung' => 'required|string|max:255',
            'Link' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $record = TinTuc::findOrFail($id);
    
        // Lưu trữ đường dẫn cũ để xóa nếu cần thiết
        $oldImageUrl = $record->HinhAnh;
    
        if ($request->hasFile('HinhAnh')) {
            // Tải ảnh mới lên Cloudinary
            $upload = Cloudinary::upload($request->file('HinhAnh')->getRealPath());
            $secureUrl = $upload->getSecurePath(); // Lấy URL an toàn
    
            // Cập nhật URL mới vào bản ghi
            $record->HinhAnh = $secureUrl;
    
            // Xóa ảnh cũ khỏi Cloudinary (nếu có)
            if ($oldImageUrl) {
                $publicId = pathinfo($oldImageUrl, PATHINFO_FILENAME);
                Cloudinary::destroy($publicId);
            }
        }
    
        // Cập nhật các trường khác
        $record->TieuDe = $request->input('TieuDe');
        $record->NoiDung = $request->input('NoiDung');
        $record->Link = $request->input('Link');
        $record->save();
    
        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công.');
    }
}
