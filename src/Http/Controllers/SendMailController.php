<?php

namespace Crazycoderscafe\C3mail\Http\Controllers;

use Crazycoderscafe\C3mail\Mail\SendMailable;
use Crazycoderscafe\C3mail\Models\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index(){
        return view('c3mail::create');
    }

    public function send(Request $request){

        $name = $request->name;
        $message = $request->message;

        Mail::to(config('c3mail.send_mail_to'))->send(new SendMailable($name, $message));

        SendMail::create($request->all());
        return redirect()->back();
    }
}
