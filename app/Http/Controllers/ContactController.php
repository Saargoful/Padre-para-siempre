<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CantactanosMailable;
class ContactController extends Controller
{
    public function store(Request $request)
    {
                               
        $request->validate([
            'nombre' => 'required|string|max:100|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email|max:100',
            'telefono' => 'required|string|min:10|max:15|regex:/^[0-9]+$/',
            'asunto' => 'required|string|max:100',
            'mensaje' => 'required|string',
            'ofertas' => 'boolean',
        ]);

    
        Mail::to("salomongomez987@gmail.com")->send(new CantactanosMailable($request->all()));


        // session()->flash("info", "Mensaje enviado");

        return redirect()->route('contact.store')->with("info", "Mensaje enviado, muchas gracias");


    }
    public function index()
    {
        return view('partials.contact');

    }
    
}

