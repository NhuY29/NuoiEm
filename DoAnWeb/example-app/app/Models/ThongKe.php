<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongKe extends Model
{
    use HasFactory;
    protected $table = '_quy_ca_nhan'; // Tên của bảng trong CSDL

    protected $fillable = ['SoTien', 'TreEm_id', 'Ngay_gop'];

}
