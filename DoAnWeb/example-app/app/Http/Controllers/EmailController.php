<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TenMailable;
use App\Models\TreEm;
use App\Models\User;
use App\Jobs\SendEmail;
class EmailController extends Controller
{
    public function formGuiEmail()
    {
        return view('gui-email');
    }
    // public function sendEmail(Request $request)
    public function sendEmail()
    {
        $to_name = "Le Quang Bao";
        $to_email = "ble07983@gmail.com";
        $data = array("name"=>"Mail Tu Khach Hang", "body" => "Nhan nuoi tre em");
        Mail::send("templates", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("Test mail nhan nuoi tre em");
            $message->from($to_email,$to_name);
        });

      return redirect()->back(); 
    }

    public function index()
    {
        $tasks = TreEm::all();

        return view('index', compact($tasks));
    }

    public function store(Request $request)
    {
        $users = User::all();
        $children = TreEm::all(); // Lấy toàn bộ thông tin về trẻ em
        $message = [
            'type' => 'Create task',
            'children' => $children,
            'content' => 'has been created!',
        ];
        SendEmail::dispatch($message, $users)->delay(now()->addSeconds(5));
     
        return redirect()->back();
    }
}