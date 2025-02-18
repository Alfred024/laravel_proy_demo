<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// MODELS
use App\Models\City;
use App\Models\ContactAgent;
use App\Models\Property;
use App\Models\PropertyListingType;

class HomelandController extends Controller
{
    public function index(){
        $cities = City::all();
        $properties = Property::all();
        $propertiesTypes = PropertyListingType::all();

        return view('homeland.index', compact('properties', 'propertiesTypes', 'cities'));
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

    public function property_details(Request $request, $property_detail_id){

        if($request->isMethod('POST')){
            $contact = new ContactAgent();
            $contact->name = $request->input("name");
            $contact->email = $request->input("email");
            $contact->phone = $request->input("phone");
            $contact->message = $request->input("message");
            $contact->property_id = $request->input("id_property");
            $contact->save();
            session()->now('response', 'Message sended succesfully!!');
        }

        $property = Property::find($property_detail_id);
        return view('homeland.property-details', compact('property'));
    }
}
