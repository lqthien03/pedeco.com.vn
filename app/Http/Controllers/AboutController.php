<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $abouts = About::all();
        return view('about.about', compact('abouts'));
    }
    public function ShowOpenLetter()
    {
        $abouts = About::all();
        return view('about.open_letter', compact('abouts'));
    }
    public function ShowAboutUs()
    {
        $abouts = About::all();
        return view('about.about_us', compact('abouts'));
    }
    public function ShowResourceStructure()
    {
        $abouts = About::all();
        return view('about.resource_structure', compact('abouts'));
    }
    public function ShowOverview()
    {
        $abouts = About::all();
        return view('about.overview', compact('abouts'));
    }
    public function ShowTransport()
    {
        $abouts = About::all();
        return view('about.transport', compact('abouts'));
    }
}
