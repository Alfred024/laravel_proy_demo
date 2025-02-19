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
        $properties = Property::where("offer_type", "For Sale")->get();
        return view('homeland.buy');
    }

    public function rent(){
        $properties = Property::where("offer_type", "For Rent")->get();
        return view('homeland.rent');
    }

    public function get_properties_listing_type($property_listing_type_id){
        $properties = PropertyListingType::find($property_listing_type_id)->properties;
        return view('homeland.index', compact('properties'));
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

    public function get_property_details(Request $request, $property_detail_id){

        if($request->isMethod('POST')){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:50',
                'phone' => 'required|max:20|regex:/^[0-9+\-() ]+$/',
                'message' => 'required|string|max:1000',
            ],[
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'email.email' => 'The email must be a valid email address.',
                'phone.regex' => 'The phone number format is invalid.',
                'message.required' => 'The message field is required.',

            ]);

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
