<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
        $response = $mailchimp->lists->setListMember(config('services.mailchimp.list'), "subscriber_hash", [
            "email_address" => $request->email,
            "status_if_new" => "unsubscribed",
        ]);
    }
}
