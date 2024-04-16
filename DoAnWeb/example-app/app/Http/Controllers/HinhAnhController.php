<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class HinhAnhController extends Controller
{
    public function upload(Request $request)
    {
        $image = $request->file('image');
        
        // Tải lên hình ảnh lên Cloudinary
        $uploadedFile = Cloudinary::upload($image->getRealPath());
        
        // Lấy đường dẫn của hình ảnh từ Cloudinary
        $imageUrl = $uploadedFile->getSecurePath();
        
        // Lưu đường dẫn vào cơ sở dữ liệu
        $imageModel = new Image();
        $imageModel->url = $imageUrl;
        $imageModel->save();
        
        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }
}
