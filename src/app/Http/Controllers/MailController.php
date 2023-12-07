<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\InformationEmail;
use Illuminate\Http\Request;
use App\Models\User;

class MailController extends Controller
{
    public function email(){
        return view('send_email');
    }

    public function sendEmail(){
       	$data = [
        'message' => 'This is the information message.',
    ];
    Mail::to('recipient@example.com')->send(new InformationEmail($data));
    return redirect('send_email')->with('result', 'メールが送信されました。');
    }
}
