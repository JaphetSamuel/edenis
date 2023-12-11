<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterNewsMessage;

class SaveNewslisterMail extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $validated = $request->validate(['email'=>'required|email|']);
        $email = $validated['email'];

        NewsMail::create(['email'=>$email]);
        
        Mail::to($email)->send(new RegisterNewsMessage());

        return Redirect::to('/');
    }
}
