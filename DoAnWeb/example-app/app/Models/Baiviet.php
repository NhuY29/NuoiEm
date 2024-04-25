<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    use HasFactory;
    protected $table = '_bai_viet'; // Tên của bảng trong CSDL

    protected $fillable = ['TieuDe', 'TreEm_id', 'NoiDung','NgayDang','user_id','isDelete'];
    public function TreEm()
    {
        return $this->belongsTo(TreEm::class, 'TreEm_id', 'id');
    }
    public function UserModel()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function HinhAnh()
    {
        return $this->hasMany(HinhAnh::class);
    }
}
