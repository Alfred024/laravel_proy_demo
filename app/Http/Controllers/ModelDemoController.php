<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloDemo;

class ModelDemoController extends Controller
{
    public function index(){
        $modelo_demos = ModeloDemo::all();
        return view('model_demo.index', compact('modelo_demos'));
    }
}
