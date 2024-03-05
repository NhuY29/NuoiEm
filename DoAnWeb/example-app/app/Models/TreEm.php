<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreEm extends Model
{
    use HasFactory;
    protected $table = '_tre_em'; // Tên của bảng trong CSDL

    protected $fillable = ['Ten', 'GioiTinh', 'TenTruongHoc', 'DiaChi', 'BenThu3_id'];
   // Model TreEm.php
public function benThu3()
{
    return $this->belongsTo(BenThu3::class);
}

}
