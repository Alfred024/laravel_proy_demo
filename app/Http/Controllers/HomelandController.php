<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomelandController extends Controller
{
    public function index(){
        return view('homeland.index');
    }

    public function buy(){
        return view('homeland.buy');
    }

    public function rent(){
        return view('homeland.rent');
    }

    public function properties(){
        return view('homeland.properties');
    }

    public function about(){
        return view('homeland.about');
    }

    public function contact(){
        return view('homeland.contact');
    }

    public function login(){
        return view('homeland.login');
    }

    public function register(){
        return view('homeland.register');
    }
}
