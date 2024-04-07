<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TreEm;
use App\Models\BenThu3;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class TreEmController extends Controller
{
    //
   
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'GioiTinh' => 'required|string',
            'TenTruongHoc' => 'required|string|max:255',
            'DiaChi' => 'required|string|max:255',
            'BenThu3_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('Ten')) {
                $errorMessage = 'Tên không được rỗng.';
            } else if ($errors->has('GioiTinh')) {
                $errorMessage = 'Giới tính không được rỗng.';
            } else if ($errors->has('TenTruongHoc')) {
                $errorMessage = 'Tên trường học không được rỗng.';
            } else if ($errors->has('DiaChi')) {
                $errorMessage = 'Địa chỉ không được rỗng.';
            } else if ($errors->has('BenThu3_id')) {
                $errorMessage = 'Bên thứ 3 không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }

        // Validate the incoming data
        $ten = $request->get('Ten');
        $GioiTinh = $request->get('GioiTinh');
        $TenTruongHoc = $request->get('TenTruongHoc');
        $DiaChi = $request->get('DiaChi');
        $BenThu3_id = $request->get('BenThu3_id');
        TreEm::create([
            'Ten' => $ten,
            'GioiTinh' => $GioiTinh,
            'TenTruongHoc' => $TenTruongHoc,
            'DiaChi' => $DiaChi,
            'BenThu3_id' => $BenThu3_id,

        ]);
        return redirect()->to("/TreEm")->with('alert', 'Đã thêm thành công');
    }
    public function index()
    {
        $allTreEmRecords = TreEm::with('benThu3')->paginate(5);
        $allBenThubaRecords = BenThu3::where('isdelete', 0)->get();
        
      return view('TreEm', compact('allTreEmRecords', 'allBenThubaRecords'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function Ds()
    {
        $allTreEmRecords = TreEm::with('benThu3')->paginate(1000);
        $allBenThubaRecords = BenThu3::where('isdelete', 0)->get();

        return view('danhsachtreem', compact('allTreEmRecords', 'allBenThubaRecords'));
    }
    
    //phan trang
    public function search(Request $request)
    {
        
        $query = $request->input('search-items-name');
        $allTreEmRecords = TreEm::where('Ten', 'like', '%'.$query.'%')->paginate(5);
        $i = 0; // Start counter at 1
    
        // Lấy dữ liệu BenThu3 nếu cần
        $allBenThubaRecords = BenThu3::where('isdelete', 0)->get();
    
        return view('TreEm', [
            'allTreEmRecords' => $allTreEmRecords,
            'allBenThubaRecords' => $allBenThubaRecords, // Pass the BenThu3 data to the view
            'i' => $i, // Pass the counter variable
        ]);
        // $query = $request->input('search-items-name');
        // $allTreEmRecords = TreEm::where('Ten', 'like', '%'.$query.'%')->paginate(5);
        // $i = 0; // Start counter at 1
    
        // return view('TreEm', [
        //     'allTreEmRecords' => $allTreEmRecords,
        //     'i' => $i, // Pass the counter variable
        // ]);
      
    }
    public function hienThiForm()
    {
        return view('TreEm');
    }
    public function delete($id)
    {
        $record = TreEm::findOrFail($id);
        $record->update(['isDelete' => 1]);

        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = TreEm::findOrFail($id);
        return view('TreEm', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Ten' => 'required|string|max:255',
            'GioiTinh' => 'required|string',
            'TenTruongHoc' => 'required|string|max:255',
            'DiaChi' => 'required|string|max:255',
            'BenThu3_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = TreEm::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
    public function exportToExcel()
    {
        // Tạo một Spreadsheet mới
        $spreadsheet = new Spreadsheet();
        
        // Lấy Sheet hiện tại
        $sheet = $spreadsheet->getActiveSheet();
        
        // Đặt giá trị cho các ô trong Sheet
        $sheet->setCellValue('A1', 'Tên');
        $sheet->setCellValue('B1', 'Tên Trường Học');
        $sheet->setCellValue('C1', 'Giới Tính');
        $sheet->setCellValue('D1', 'Địa Chỉ');
        $sheet->setCellValue('E1', 'Bên Thứ 3');
        
        // Lấy dữ liệu từ database hoặc bất kỳ nguồn nào khác
        $data = TreEm::all(); // Ví dụ lấy dữ liệu từ model User
        
        // Duyệt qua từng dòng dữ liệu và đưa vào Sheet
        $row = 2;
        foreach ($data as $user) {
            $sheet->setCellValue('A' . $row, $user->Ten);
            $sheet->setCellValue('B' . $row, $user->TenTruongHoc);
            $sheet->setCellValue('C' . $row, $user->GioiTinh);
            $sheet->setCellValue('D' . $row, $user->DiaChi);
            $sheet->setCellValue('E' . $row, BenThu3::findOrFail($user->BenThu3_id)->Ten);
            $row++;
        }
        
        // Tạo một đối tượng Writer và ghi dữ liệu vào file Excel
        $writer = new Xlsx($spreadsheet);
        $fileName = 'TreEm.xlsx';
        $writer->save($fileName);
        
        // Trả về file Excel cho người dùng để tải xuống
        return response()->download($fileName)->deleteFileAfterSend(true);
    }
   
}
