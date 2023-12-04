<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }
}
