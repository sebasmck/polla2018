<?php

namespace App;

use Mail;

class Emails
{
    public static function email_registration_user($email, $data){
        Mail::send('emails.email_user',  $data, function($message) use ($email){
            $message->from('contact@pollaworldcup.com', 'PollaworldCup.com - Registration');
            $message->to($email)
                     ->subject('New user registered');
        });
    }

    public static function email_registration_admin( $data){
        Mail::send('emails.email_admin',  $data, function($message){
            $message->from('contact@pollaworldcup.com', 'PollaworldCup.com - Registration');
            $message->to('contact@pollaworldcup.com')
                     ->subject('New user registered');
        });
    }
}
