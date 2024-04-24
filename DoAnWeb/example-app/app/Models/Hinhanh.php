<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhanh extends Model
{
    use HasFactory;
    protected $table = '_hinh_anh'; // Tên của bảng trong CSDL

    protected $fillable = ['DuongDan', 'ChuThich', 'BaiViet_id','TreEm_id'];
    public function TreEm()
    {
        return $this->belongsTo(TreEm::class, 'TreEm_id', 'id');
    }
    public function Baiviet()
    {
        return $this->belongsTo(BaiViet::class, 'BaiViet_id', 'id');
    }
}
