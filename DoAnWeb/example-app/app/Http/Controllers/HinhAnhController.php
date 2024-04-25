<?php

namespace App\Http\Controllers;

use App\Models\HinhAnhModel;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class HinhAnhController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->file('image');
        
        $uploadedFile = Cloudinary::upload($image->getRealPath(), [
            'folder' => 'uploads', 
        ]);
        
        // Lấy đường dẫn của hình ảnh từ Cloudinary
        $imageUrl = $uploadedFile->getSecurePath();
        
        // Lưu đường dẫn vào cơ sở dữ liệu
        $imageModel = new HinhAnhModel();
        $imageModel->DuongDan = $imageUrl;
        $imageModel->save();
        
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
}
