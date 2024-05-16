<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThongKe;

class ThongKeController extends Controller
{
    public function index(Request $request){
        $tungay = $request->tuNgay;
        $denngay = $request->denNgay;
        $get = ThongKe::whereBetween('created_at', [$tungay, $denngay])->orderBy('created_at','ASC')->get();
        $chart_data = [];
        foreach($get as $key => $value){
           $chart_data[] = array(
               "period" => $value->created_at,
               "licensed" => $value->SoTien,
           );
        }
        return response()->json($chart_data);
    }
}
