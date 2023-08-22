<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Service;

class FrontendController extends Controller
{
    public function index(){
        $services= Service::all();
      
        return view('frontend.index', compact('services'));
    }
    public function service(){
        $services= Service::all();
        // dd($services);
        return view('frontend.service',compact('services'));
    }
    public function about(){
         return view('frontend.about');
     }
     public function project(){
         return view('frontend.project');
     }
    public function testimonial(){
         return view('frontend.testimonial');
     }
     public function contact(){
         return view('frontend.contact');
     }
     public function showLogin(){
        return view('frontend.login');
     }

     //dashbaord backend index.blade.php file
     public function dashboard(){
        return view('backend.index');
     }
     public function login(Request $request)
     { 
 
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
        
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
  
             return redirect('/dashboard');
         }else{
             dd('password not match');
         }
  
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');
     }

     public function logout(Request $request): RedirectResponse
     {
         Auth::logout();
     
         $request->session()->invalidate();
     
         $request->session()->regenerateToken();
     
         return redirect('/');
    }
}
