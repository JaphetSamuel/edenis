<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Front\AdhesionFormRequest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Adhesion;
use Illuminate\Support\Facades\Mail;

class SaveAdhesionForm extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {

        $adhesionform = $request->validate((new AdhesionFormRequest())->rules());
        
        $adhesionform['statut_id'] = $adhesionform['statut'];

        Adhesion::create($adhesionform);
        
        Mail::to($adhesionform['email'])->send(new \App\Mail\WelcomeMail(
            $adhesionform['nom'],
            $adhesionform['prenom']
            ))->appendDebug("message send");



        return Redirect::back()->with("status","Merci M/Mme ". ($adhesionform['nom'])." ")
            ->with("sended_email",$adhesionform['email']);
    }
}
