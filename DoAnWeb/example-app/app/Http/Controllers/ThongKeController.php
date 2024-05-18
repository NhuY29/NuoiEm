<?php
// App\Http\Controllers\ThongKeController.php

namespace App\Http\Controllers;

use App\Models\ThongKe;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function index()
    {
        $data = ThongKe::with('treEm')
            ->where('isdelete', 0) // Thêm điều kiện isdelete
            ->selectRaw('TreEm_id, sum(SoTien) as TongTien')
            ->groupBy('TreEm_id')
            ->get();

        $array = [['TreEm', 'TongTien']];
        foreach ($data as $value) {
            $array[] = [$value->treEm->Ten, floatval($value->TongTien)]; // Sử dụng tên của TreEm
        }

        return view('ThongKe')->with('data', json_encode($array));
    }
}

 