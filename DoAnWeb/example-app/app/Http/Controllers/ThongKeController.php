<?php

namespace App\Http\Controllers;

use App\Models\ThongKe;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class ThongKeController extends Controller
{
    public function index()
    {
        $data = ThongKe::selectRaw('count(TreEm_id) as TreEm, sum(SoTien) as TongTien')
                        ->groupBy('TreEm_id')
                        ->get();
        
        $array = [['TreEm', 'TongTien']];
        foreach ($data as $key => $value) {
            $array[++$key] = [$value->TreEm, floatval($value->TongTien)]; // Chuyển đổi 'TongTien' thành kiểu số
        }
    
        return view('ThongKe')->with('data', json_encode($array));
    }
    
}
 