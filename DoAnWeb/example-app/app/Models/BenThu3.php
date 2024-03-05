<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenThu3 extends Model
{
    use HasFactory;
    protected $table = '_ben_thu3'; // Tên của bảng trong CSDL

    protected $fillable = ['Ten', 'GioiTinh', 'DiaChi', 'SDT', 'NgheNghiep', 'NoiCongTac'];
    public function treEm()
{
    return $this->hasMany(TreEm::class);
}

}
