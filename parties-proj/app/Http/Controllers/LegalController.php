<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legal;

class LegalController extends Controller
{
    public function index()
    {
        return view('entities.legal.index', [
            'legals' => Legal::all()
        ]);
    }
}
