<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
            ]);

        $contact = array(
                'name'      =>  $request->name,
                'email' => $request->email,
                'message'   =>   $request->message
            );

            $email = 'rmonroy.rodriguez@gmail.com'; // Dirección de correo donde llegarán los correos del formulario de la landingpage

            // dd($contact);

        Mail::to($email)->send(new Contact($contact));

        return back()->with('success', 'Enviado exitosamente!');

    }
}
