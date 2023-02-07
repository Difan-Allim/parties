<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purpose;

class PurposeController extends Controller
{
    public function index()
    {
        return view('entities.purpose.index', [
            'purposes' => Purpose::all()
        ]);
    }
}
