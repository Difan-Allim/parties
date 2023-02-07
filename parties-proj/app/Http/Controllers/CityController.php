<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return view('entities.cities.index', [
            'cities' => City::all()
        ]);
    }
}
