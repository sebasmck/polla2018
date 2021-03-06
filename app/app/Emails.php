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
            $message->to('contact@pollaworldcup.com')
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

    public static function email_forgot_password($email, $data){
        Mail::send('emails.email_user_forgot',  $data, function($message) use ($email){
            $message->from('contact@pollaworldcup.com', 'PollaWorldCup.com Password Reminder');
            $message->to($email)
                     ->subject('PollaWorldCup.com Password Reminder');
        });
    }
}
