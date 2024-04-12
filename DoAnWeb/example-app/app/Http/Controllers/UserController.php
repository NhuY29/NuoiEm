<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserModel;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Socialite;
use Exception;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function Loginsss(Request $request)
    {
        $defaultUser = User::where('email', 'ble07983@gmail.com')->first();

        // Nếu không có, tạo một tài khoản mặc định
        if (!$defaultUser) {
            
             $role = new Roles();
             $role->name = 'SuperAdmin';
             $role->save();
             $role2 = new Roles();
             $role2->name = 'Admin';
             $role2->save();
             $role3 = new Roles();
             $role3->name = 'NhanVien';
             $role3->save();

            $user = new User();
            $user->name = 'ble07983@gmail.com';
            $user->email = 'ble07983@gmail.com';
            $user->password = Hash::make('password');
            $user->roles_id = 1;
            $user->save();
           alert(" hi hi ");
        }
        return view('index');
       
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            Cookie::queue('user_id', $user->id, 60);
            return redirect()->intended('/User');
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác.',
        ]);
    }
    public function logout()
    {
        // Xóa cookie đã lưu
        Cookie::queue(Cookie::forget('user_id'));
    
        // Thực hiện đăng xuất
        Auth::logout();
    
        // Redirect về trang đăng nhập hoặc trang chính
        return redirect('/');
    }

    public function xuLyDuLieu(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'Phone' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'roles_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            // Kiểm tra lỗi cho từng trường
            if ($errors->has('name')) {
                $errorMessage = 'Tên không được rỗng.';
            } else if ($errors->has('email')) {
                $errorMessage = 'Giới tính không được rỗng.';
            } else if ($errors->has('Phone')) {
                $errorMessage = 'Tên trường học không được rỗng.';
            } else if ($errors->has('Address')) {
                $errorMessage = 'Địa chỉ không được rỗng.';
            } else if ($errors->has('roles_id')) {
                $errorMessage = 'Bên thứ 3 không được rỗng.';
            } else {
                $errorMessage = 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu.';
            }

            // Trả về một script JavaScript thông báo lỗi
            return redirect()->back()->with('alert', $errorMessage)->withInput();
        }

        // Validate the incoming data
        $name = $request->get('name');
        $email = $request->get('email');
        $Phone = $request->get('Phone');
        $Address = $request->get('Address');
        $roles_id = $request->get('roles_id');
        $password = $request->get('password');
        UserModel::create([
            'name' =>  $name,
            'email' => $email ,
            'Phone' => $Phone,
            'Address' => $Address,
            'password' => Hash::make($password),
            'roles_id' => $roles_id,

        ]);

        // $user = new User();
        //     $user->name = $name;
        //     $user->email =  $email;
        //     $user->password = Hash::make('password');
        //     $user->roles_id = $roles_id;
        //     $user->save();
        return redirect()->to("/User")->with('alert', 'Đã thêm thành công');
    }
    public function index()
    {
        $allUserRecords = UserModel::with('roles')->paginate(5);
        $allRolesRecords = Roles::all();

      return view('User', compact('allUserRecords', 'allRolesRecords'))->with('i',(request()->input('page',1)-1)*5);
    }
    
    
    //phan trang
    public function search(Request $request)
    {
        
        $query = $request->input('search-items-name');
        $allUserRecords = UserModel::where('name', 'like', '%'.$query.'%')->paginate(5);
        $i = 0; // Start counter at 1
    
        // Lấy dữ liệu BenThu3 nếu cần
        $allRolesRecords = Roles::all();

    
        return view('User', [
            'allUserRecords' => $allUserRecords,
            'allRolesRecords' =>  $allRolesRecords, // Pass the BenThu3 data to the view
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
        return view('User');
    }
    public function delete($id)
    {
        $record = UserModel::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('alert', 'Đã xóa bản ghi thành công');
    }
    public function edit($id)
    {
        $record = UserModel::findOrFail($id);
        return view('User', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'Phone' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'roles_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = UserModel::findOrFail($id);
        $record->update($request->all());

        return redirect()->back()->with('success', 'Đã cập nhật bản ghi thành công');
    }
}


