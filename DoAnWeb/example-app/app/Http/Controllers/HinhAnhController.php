<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\HinhAnh;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\Baiviet;

class HinhAnhController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'DuongDan' => 'required|string|max:255',
            'ChuThich' => 'required|string|max:255',
            'BaiViet_id' => 'required|string|max:255',
            'TreEm_id' => 'required|date',
        ]);
        // Validate the incoming data
        $DuongDan = $request->get('DuongDan');
        $ChuThich = $request->get('ChuThich');
        $BaiViet_id = $request->get('BaiViet_id');
        $TreEm_id = $request->get('TreEm_id');
   
        HinhAnh::create([
            'DuongDan' => $DuongDan,
            'ChuThich' => $ChuThich,
            'BaiViet_id' => $BaiViet_id,
            'TreEm_id' => $TreEm_id,

        ]);
        return redirect()->to("/HinhAnh");
    }
    public function index()
    {
        $allHinhAnhRecords = HinhAnh::where('isDelete', false)->paginate(5);
        $allTreEmRecords = TreEm::where('isdelete', 0)->get();
        $allBaiVietRecords = BaiViet::where('isdelete', 0)->get();
    return view('HinhAnh', compact('allHinhAnhRecords',"allTreEmRecords","allBaiVietRecords"))->with('i',(request()->input('page',1)-1)*5);
    }
    //phan trang

//search
    public function search(Request $request)
    {
        $query = $request->input('search-items-name');
        $allHinhAnhRecords =HinhAnh::where('TreEm_id', 'like', '%'.$query.'%')
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
            'DuongDan' => 'required|string|max:255',
            'ChuThich' => 'required|string|max:255',
            'BaiViet_id' => 'required|string|max:255',
            'TreEm_id' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = HinhAnh::findOrFail($id);
        
        $record->update($request->all());
          
        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
    // public function upload(Request $request)
    // {
    //     $image = $request->file('image');
        
       
    //     $uploadedFile = Cloudinary::upload($image->getRealPath());
        

    //     $imageUrl = $uploadedFile->getSecurePath();
        

    //     $imageModel = new Image();
    //     $imageModel->url = $imageUrl;
    //     $imageModel->save();
        
    //     return redirect()->back()->with('success', 'Image uploaded successfully!');
    // }
}
