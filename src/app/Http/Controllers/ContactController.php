<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        foreach ($contacts as $contact) {
            $contact->postcode = mb_convert_kana($contact, 'an');
        }

        return view('index', compact('contacts'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $fullname = $request->get('lastname').''.$request->get('firstname');


        return view('confirm', compact('contact', 'fullname'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->all();
        Contact::create($contact);

        return view('thanks');
    }
}
