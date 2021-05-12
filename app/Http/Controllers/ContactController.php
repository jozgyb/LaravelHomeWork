<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function ContactUsForm(Request $request)
    {
        $this->validate($request, [
            'sender' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Message::create($request->all());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
