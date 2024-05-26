<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguoinhannuoi extends Model
{
    use HasFactory;
    protected $table = '_nguoi_nhannuoi'; // Tên của bảng trong CSDL

    protected $fillable = ['HoTen', 'Email', 'CCCD', 'SDT', 'NgheNghiep' , 'ThuNhapTrungBinh','DiaChi','isDelete','TreEm_id'];

    public function TreEm()
    {
        return $this->belongsTo(TreEm::class, 'TreEm_id', 'id');
    }

}
