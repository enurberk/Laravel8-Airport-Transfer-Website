<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    return view('layouts.home');
    }
    public function index(){
        return view('home.index');
    }
}
