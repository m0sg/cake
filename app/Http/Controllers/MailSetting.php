<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    //
    /**
     * @param Request $request
     */
    public function send_form(Request $request){


        $name = $request->name;
        $phone = $request->phone;

        Mail::to('m0sgsergey@gmail.com')->send(new MailClass($name, $phone));

    }
}
