<?php

namespace Plusemon\Contact\http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\ContactMailSender;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('Contact::contact');
    }

    public function send(Request $request)
    {

        dispatch(new ContactMailSender($request->all()));

        return back()->with(['message' => 'Mail has been send successfully']);
    }
}
