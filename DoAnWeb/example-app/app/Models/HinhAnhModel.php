<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhModel extends Model
{
    use HasFactory; protected $table = '_hinh_anh'; // Tên của bảng trong CSDL

    protected $fillable = ['DuongDan', 'ChuThich', 'BaiViet_id', 'TreEm_id','isDelete'];
    public function TreEm()
    {
        // return $this->belongsTo(BenThu3::class);
        return $this->belongsTo(TreEm::class, 'TreEm_id', 'id');
    }
    public function BaiViet()
    {
        // return $this->belongsTo(BenThu3::class);
        return $this->belongsTo(Baiviet::class, 'BaiViet_id', 'id');
    }
}

