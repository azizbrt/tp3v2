<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function newContact()
    {
        $newContact = new Contact();
        $newContact->nom = "jinen";
        $newContact->email = "ksibi@example.com";
        $newContact->message = "Message example";
        $newContact->save();
    }
    public function listContact(){
        $contacts = contact ::all();
    return view('contacts',['contacts' => $contacts]);
    }

}
