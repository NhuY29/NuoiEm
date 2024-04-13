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
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $id_card_number = $request->input('id_card_number');
        $phone_number = $request->input('phone_number');
        // $treem_id = $_GET['treem_id'];
        $treem = session('treem');
        $treem_id = $treem->id;
        // dump($treem_id);
        $to_name = "Le Quang Bao";
        $data = array(
            "email" => $email,
            "name" => $name,
            "id_card_number" => $id_card_number,
            "phone_number" => $phone_number,
            "treem_id" => $treem_id
        );
        
        Mail::send("templates", $data, function($message) use ($to_name, $email, $data) {
            $message->to($email, $to_name)->subject("Test mail nhan nuoi tre em");
            $message->from($data['email'], $data['name']);
          
        });

      return redirect()->back(); 
    }

    // public function sendEmail()
    // {
    //     $to_name = "Le Quang Bao";
    //     $to_email = "ble07983@gmail.com";
    //     $data = array("name"=>"Mail Tu Khach Hang", "body" => "Nhan nuoi tre em");
    //     Mail::send("templates", $data, function($message) use ($to_name, $to_email) {
    //         $message->to($to_email, $to_name)->subject("Test mail nhan nuoi tre em");
    //         $message->from($to_email,$to_name);
    //     });

    //   return redirect()->back(); 
    // }

    public function index()
    {
        $tasks = TreEm::all();

        return view('index', compact($tasks));
    }

   
}