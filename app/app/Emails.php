<?php

namespace App;

use Mail;

class Emails
{
    public static function email_registration_user($email, $data){
        Mail::send('emails.email_user',  $data, function($message) use ($email){
            $message->from('contact@pollaworldcup.com', 'PollaWorldCup.com Registration');
            $message->to($email)
                     ->subject('PollaWorldCup.com Registration');
        });
    }

    public static function email_registration_admin( $data){
        Mail::send('emails.email_admin',  $data, function($message){
            $message->from('contact@pollaworldcup.com', 'PollaWorldCup.com Registration');
            $message->to('miami@pollaworldcup.com')
                     ->subject('PollaWorldCup.com Registration');
        });
    }

    public static function email_registration_user_approved($email, $data){
        Mail::send('emails.email_user_approved',  $data, function($message) use ($email){
            $message->from('contact@pollaworldcup.com', 'PollaWorldCup.com Pool Accepted');
            $message->to($email)
                     ->subject('PollaWorldCup.com Pool Accepted');
        });
    }
}
