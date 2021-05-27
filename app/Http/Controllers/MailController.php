<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\FeedbackMail;

class MailController extends Controller
{
    public function mail($name,$email){
    	$data = [
    		'name' =>$name
    	];

    	Mail::to($email)->send(new FeedbackMail($data));
    }
}
