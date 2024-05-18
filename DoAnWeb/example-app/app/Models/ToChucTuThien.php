<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToChucTuThien extends Model
{
    use HasFactory;
    protected $table = 'tochuctuthien'; // Tên của bảng trong CSDL

    protected $fillable = ['Ten', 'MoTa', 'DiaChi', 'SDT', 'Email', 'ThongTin' ,'isDelete'];
    public function Quy()
    {
        return $this->hasMany(Quy::class);
    }
    
}
