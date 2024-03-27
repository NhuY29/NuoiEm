<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'users'; // Tên của bảng trong CSDL

    protected $fillable = ['name', 'email', 'roles_id', 'Phone', 'Address','password'];
   // Model TreEm.php
public function roles()
{
    // return $this->belongsTo(BenThu3::class);
    return $this->belongsTo(UserModel::class, 'roles_id', 'id');
}
public function BaiViet()
{
    return $this->hasMany(Baiviet::class);
}
}
