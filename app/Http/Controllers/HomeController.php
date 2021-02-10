<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
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
         $data = [
            'setting' => $setting,
            'page'=>'home'
        ];
        return view('home.index', $data);
    }

    public function blog1()
    {
        $setting = Setting::first();
        return view('home.blog1',['setting' => $setting]);
    }
    public function blog2()
    {
        $setting = Setting::first();
        return view('home.blog2',['setting' => $setting]);
    }
    public function blog3()
    {
        $setting = Setting::first();
        return view('home.blog3',['setting' => $setting]);
    }

    public function transfer($id, $slug)
    {
        $data = Transfer::find($id);
        $datalist = Image::where('transfer_id', $id)->get();
        #print_r($data);
        #exit();
        return view('home.transfer_detail', ['data' => $data, "datalist"=>$datalist]);
    }

    public function categorytransfers($id, $slug)
    {
        $datalist = Transfer::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_transfers',['data' => $data, 'datalist' => $datalist]);
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
        $setting = Setting::first();
        return view('home.booking',['setting' => $setting]);
    }

    public function services()
    {
        $setting = Setting::first();
        return view('home.services',['setting' => $setting]);
    }

    public function vehicles()
    {
        $setting = Setting::first();
        return view('home.vehicles',['setting' => $setting]);
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
    { $setting = Setting::first();
        return view('home.faq',['setting' => $setting]);
    }

    public function blog()
    { $setting = Setting::first();
        return view('home.blog',['setting' => $setting]);
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
//    public function elif()
//    {
//        $transfer = Transfer::first();
//        $toplam = $transfer->base_price * $transfer->km_price;
//        return $toplam;
//    }
}
