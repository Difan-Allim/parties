<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        return view('entities.type.index', [
            'types' => Type::all()
        ]);
    }
}
