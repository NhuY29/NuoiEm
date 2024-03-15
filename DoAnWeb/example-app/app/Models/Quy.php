<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quy extends Model
{
    use HasFactory;
    protected $table = '_quy'; // Tên của bảng trong CSDL

    protected $fillable = ['Ten', 'MoTa', 'TrangThai', 'TreEm_id', 'ToChucTuThien_id','isDelete'];
    public function TreEm()
    {
        // return $this->belongsTo(BenThu3::class);
        return $this->belongsTo(TreEm::class, 'TreEm_id', 'id');
    }
    public function ToChucTuThien()
    {
        // return $this->belongsTo(BenThu3::class);
        return $this->belongsTo(ToChucTuThien::class, 'ToChucTuThien_id', 'id');
    }
}
