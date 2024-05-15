<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinTam extends Model
{
    use HasFactory;
    protected $table = 'thongtintam'; // Tên của bảng trong CSDL

    protected $fillable = ['NoiDung', 'TenBe', 'HinhAnh', 'Email', 'HotenNguoi3'];
   
}
