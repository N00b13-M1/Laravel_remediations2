<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class BackController extends Controller
{
gfdgreergegeg

    public function mail(Request $request){


        dd($request);
        Mail::to($request->email)->send(new testMail($request->name, $request->email, $request->subject, $request->message ));
        return view ("back.backend");
    }
    //$request->email  -> email from the form
}

