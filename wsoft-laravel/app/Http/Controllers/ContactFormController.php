<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->all();

        Mail::send('emails.contact', ['data' => $data], function ($message) {
            $message->to('support@wsoftglobal.com')
                    ->from('shalakaindunil137@gmail.com')
                    ->subject('New Contact Form Submission');
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

}
