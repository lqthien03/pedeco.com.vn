<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $abouts = About::all();
        return view('about', compact('abouts'));
    }
}
