<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Service;
use App\Models\ContactForm;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
        {
            $abouts= About::all();
            $services= Service::all();
            return view('frontend.index',compact('services','abouts'));
        }
    public function service(){
        $services= Service::all();
        // dd($services);
        return view('frontend.service',compact('services'));
    }
    public function about(){
        $abouts= About::all();
        // dd($abouts);
         return view('frontend.about',compact('abouts'));
     }
     public function project(){
         return view('frontend.project');
     }
    public function testimonial(){
        $testimonials = Testimonial::all();
         return view('frontend.testimonial', compact('testimonials'));
     }
     public function contact(){
         return view('frontend.contact');
     }
     public function showLogin(){
        return view('frontend.login');
     }
     public function submitForm(Request $request){
       // Validate the form data
       $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);
        ContactForm::create($validatedData);
        return  redirect()->route('contact');
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
