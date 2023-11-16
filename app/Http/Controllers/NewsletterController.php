<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsletterController extends Controller
{
    //
    public function suscribe(Request $request){

        $request->validate(['email' => 'required|email']);
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server')
        ]);

        $mailchimp->lists->addListMember(config('services.mailchimp.list'), [
            "email_address" => $request->email,
            "status" => "pending",
        ]);

    }
}
