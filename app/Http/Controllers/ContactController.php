<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Mail\WelcomeEmail;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    function index()
    {

        return view('contact');
    }

    function create()
    {

        return view('contact');
    } 

    function store(Request $request)
    {
        $contact  = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        
        Mail::to('admin@admin.com')->send(new WelcomeEmail([
            'name' => 'Demo',
       ]));

        return redirect('contact');
    }
    
}
