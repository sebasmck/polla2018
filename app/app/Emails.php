<?php

use Mail;

class Email
{
    public static function email_registration_user($data){
        Mail::send('emails.mail_seguimiento',  $data, function($message){
            $message->from('contact@pollaworldcup.com', 'PollaworldCup.com - Registration');
            $message->to($data['email'])
                     ->subject('Se ha adjuntado un nuevo documeto');
        });
    }

    public static function email_registration_user($data){
        Mail::send('emails.mail_seguimiento',  $data, function($message){
            $message->from('contact@pollaworldcup.com', 'PollaworldCup.com - Registration');
            $message->to('contact@pollaworldcup.com')
                     ->subject('Se ha adjuntado un nuevo documeto');
        });
    }
}
