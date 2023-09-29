<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use PharIo\Manifest\Email;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;

use function Laravel\Prompts\password;

class ForgetPasswordManager extends Controller
{
    public function forgetPassword(){
        return view('frontend.forget-password');
    }
    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $token = Str::random(length: 64);
        DB::table(table: 'password_resets')->insert([
            'email' =>$request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::send(['html' => 'emails.forget-password'], ['token' => $token], function($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
        });
        
        return redirect()->to(route('forget.password'))->with("success", "we have sent the email to reset the password.");
        
        // $status = Password::sendResetLink($request->only('email'));

        // return $status === Password::RESET_LINK_SENT
        //     ? back()->with(['status' => __($status)])
        //     : back()->withErrors(['email' => __($status)]);

    }
     function resetPassword($token){
        return view('new-password', compact('token'));
     }
     function resetPasswordPost(Request $request){
        $request->validate([
            "email" => "required|email|exists:users",
            "password" => "required|string|min:6|confirmed",
            "password_confirmation" => "required"
        ]);
        
     $updatePassword = DB::table('password_resets')->where([
        "email" =>$request->email,
        "token" =>$request->token
     ])->first();
     if(!$updatePassword){
        return redirect()->to(route('reset.password'))->with("error","invalid");
     }
     User::where("email",$request->email)->update(["password"=>Hash::make($request->password)]);
     DB::table('password_resets')->where(["email"=>$request->email])->delete();
     return redirect()->to(route('login'));
     }
}