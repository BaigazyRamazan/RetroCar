<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MailController;

use Illuminate\Http\Request;

use App\Models\Feedback;

use Auth;

class FeedbackController extends Controller
{
    public function store(Request $request){
        $mail = new MailController();
        $mail->mail(Auth::user()->name,Auth::user()->email);

        Feedback::create([
            'feedbacks' => $request->feedback,
            'user_id' => Auth::user()->id
        ]);

        return back();
    }
}
