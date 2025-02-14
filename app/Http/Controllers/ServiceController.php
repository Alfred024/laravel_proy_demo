<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;

class ServiceController extends Controller
{
    public function index() {
        $services = ServiceModel::all();
        return view('services', compact('services')); # ? El services que se pasa a compact es el nombre de la tabla en la base de datos
    }
}
