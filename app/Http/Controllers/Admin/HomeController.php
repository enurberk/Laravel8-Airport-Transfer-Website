<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index(){
        return view('admin.index');
    }
    /*
    public function aboutus(){
        return view('admin.about');
    }

    public function login(){
        return view('admin.login');
    }

    public function loginCheck(Request $request){
        return view('admin.index');    }
    */
}
