<?php

namespace App\Http\Controllers;
use App\Models\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //metodo index retornara todas las localizaciones 
    public function index(){
        return Location::all();
    }
}
