<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomelandController extends Controller
{
    public function index(){
        return view('homeland.index');
    }

    public function contact(){
        return view('homeland.contact');
    }

    public function about(){
        return view('homeland.about');
    }
}
