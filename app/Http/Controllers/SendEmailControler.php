<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailControler extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'email'   =>   $request->email,
            'initials' => $request->initials,
            'surname' => $request->surname,
        );

        Mail::to(request('email'))->send(new SendMail($data));
        return redirect(route('parkingSpace.index'));
    }
}

