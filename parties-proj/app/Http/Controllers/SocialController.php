<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        return view('entities.social.index', [
            'socials' => Social::all()
        ]);
    }
}
