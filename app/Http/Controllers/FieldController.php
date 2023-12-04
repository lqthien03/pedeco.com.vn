<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function show()
    {
        return view('field_of_activity');
    }
}
