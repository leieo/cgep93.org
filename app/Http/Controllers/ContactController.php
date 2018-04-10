<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['msg'] = $request->get('msg');

        Mail::send('contactmail', ['name' => $contact['name'], 'email' => $contact['email'], 'msg' => $contact['msg']], function ($message) {

            $message->subject('Vous avez recu un message de la part d\'un utilisateur de votre site');
            $message->from('cgep93web@gmail.com', 'Votre systeme de contact ! :)');
            $message->to('cgep93web@gmail.com');

        });
        return view('messageOk');
    }

    public function viewContact()
    {
        return view('contact');
    }
}