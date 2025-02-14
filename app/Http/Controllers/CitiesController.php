<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('cities', compact('cities'));
    }
}
