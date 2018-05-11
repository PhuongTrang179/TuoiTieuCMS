<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\ToolModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->pass = $request->input('pass');
        $objDemo->ho = $request->input('ho');
        $objDemo->ten = $request->input('ten');
        $email = new DemoEmail($objDemo);
        $st =   Mail::to($request->input('email'))->send($email);
        return $st;
    }
}
