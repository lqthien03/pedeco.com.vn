<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function show()
    {
        $field_of_activity = $field_of_activity = Field::all();
        return view('field_of_activity.field_of_activity', compact('field_of_activity'));
    }

    public function showDetail($id)
    {
        $field_of_activity_id = Field::find($id);
        return view('field_of_activity.field_of_activity', compact('field_of_activity_id'));
    }
}

