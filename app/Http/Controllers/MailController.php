<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title'=> 'Mail from CM',
            'body' => 'This is for testing email usign smtp'
        ];
        Mail::to('chandramohanbhatt5@gmail.com')->send(new DemoMail($mailData));
    }
}
