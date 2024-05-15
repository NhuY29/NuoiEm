<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = '_baivietintuc'; // Tên của bảng trong CSDL

    protected $fillable = ['HinhAnh', 'TieuDe', 'NoiDung'];
}
