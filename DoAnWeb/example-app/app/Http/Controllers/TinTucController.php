<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TinTuc;

class TinTucController extends Controller
{
    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'HinhAnh' => 'required|string|max:255',
            'TieuDe' => 'required|string',
            'NoiDung' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            if ($errors->has('HinhAnh')) {
                $errorMessage = 'Hình ảnh không được rỗng.';
            } else if ($errors->has('TieuDe')) {
                $errorMessage = 'Tiêu đề không được rỗng.';
            } else if ($errors->has('NoiDung')) {
                $errorMessage = 'Nội dung không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }

        $HinhAnh = $request->get('HinhAnh');
        $TieuDe = $request->get('TieuDe');
        $NoiDung = $request->get('NoiDung');
        TinTuc::create([
            'HinhAnh' => $HinhAnh,
            'TieuDe' => $TieuDe,
            'NoiDung' => $NoiDung,
        ]);
        return redirect()->to("/TinTuc");
    }

    public function index()
    {
        $allTinTucRecords = TinTuc::paginate(5);
        return view('TinTuc', compact('allTinTucRecords'));
    }
    public function DS()
    {
        $allTinTucRecords = TinTuc::all();
        return view('home', compact('allTinTucRecords'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search-items-name');
        $allTinTucRecords = TinTuc::where('TieuDe', 'like', '%' . $query . '%')->paginate(5);
        return view('TinTuc', compact('allTinTucRecords'));
    }

    public function hienThiForm()
    {
        return view('TinTuc');
    }

    public function delete($id)
    {
        $record = TinTuc::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công.');
    }

    public function edit($id)
    {
        $record = TinTuc::findOrFail($id);
        return view('TinTuc', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'HinhAnh' => 'required|string|max:255',
            'TieuDe' => 'required|string',
            'NoiDung' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = TinTuc::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công.');
    }
}
