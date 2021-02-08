<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting' => $setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting' => $setting]);
    }

    public function booking()
    {
        return view('home.booking');
    }

    public function services()
    {
        return view('home.services');
    }

    public function vehicles()
    {
        return view('home.vehicles');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data -> name = $request -> input('name');
        $data -> email = $request -> input('email');
        $data -> phone = $request -> input('phone');
        $data -> subject = $request -> input('subject');
        $data -> message = $request -> input('message');
        $data -> save();
        return redirect() -> route('contact')->with('success',"Your message's saved!");
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function login(){
        return view('admin.login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request -> session()->invalidate();

        $request ->session()->regenerateToken();

        return redirect('/');
    }

    public function logincheck(Request $request){

        if($request->isMethod('post')){

            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        }
        else{
            return view('admin.login');
        }
    }
}
