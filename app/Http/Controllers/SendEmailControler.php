<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use function Webmozart\Assert\Tests\StaticAnalysis\object;

class SendEmailControler extends Controller
{
    public function send(Request $request)
    {
        $data =[
            'email'   =>   $request->email,
            'initials' => $request->initials,
            'surname' => $request->surname,
            'phone' => $request->phone,

        ];

        Mail::to(request('email'))->send(new SendMail($data));
        return redirect(route('parkingSpace.index'));
    }
}

