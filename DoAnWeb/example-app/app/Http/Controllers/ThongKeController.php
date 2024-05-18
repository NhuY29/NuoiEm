<?php
// App\Http\Controllers\ThongKeController.php

namespace App\Http\Controllers;

use App\Models\ThongKe;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function index(Request $request)
    {
        $query = ThongKe::with('treEm')
            ->where('isdelete', 0);

        // Lọc theo ngày nếu có
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('Ngay_gop', [$startDate, $endDate]);
        }

        $data = $query->selectRaw('TreEm_id, sum(SoTien) as TongTien')
            ->groupBy('TreEm_id')
            ->get();

        $array = [['TreEm', 'TongTien']];
        foreach ($data as $value) {
            $array[] = [$value->treEm->Ten, floatval($value->TongTien)]; // Sử dụng tên của TreEm
        }

        return view('ThongKe')->with('data', json_encode($array));
    }
}


 