<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function store (Request $request) {
        Contact::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "question"=>$request->question,
            ]);

            $contacts = Contact::all();

            return view("contact.allContacts", ["contacts" => $contacts]);
    }

    public function show () {
        $contacts = Contact::all();

        return view("contact.allContacts", ["contacts" => $contacts]);
    }
}
