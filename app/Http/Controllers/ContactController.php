<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
/*    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
        ]);
        Mail::to('@yandex.ru')->send(new ContactFormMail($data));
    }*/
}
