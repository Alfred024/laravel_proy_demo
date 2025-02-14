<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomelandController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('homeland.index', compact('properties'));
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

    public function property_details($property_detail_id){
        $property = Property::find($property_detail_id);
        return view('homeland.property-details', compact('property'));
    }
}
