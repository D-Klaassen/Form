<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $successMessage = 'De gegevens zijn succesvol ingevuld en verzonden!';

        $formInformation = $this->validate($request, [
            'legal-form' => 'required|in:Proprietorship,VOF,Partnership,Private-company,Limited-company,Foundation,Association,Other',
            'House-number' => 'required|integer',
            'postal-code-number' => 'required|max:100|digits:4',
            'postal-code-text' => 'required|size:2|alpha',
            'E-mail-client' => 'required|email',
            'E-mail-financial-correspondence' => 'required|email',
        ]);

        $this->sendEmail($formInformation);

        return back()->with('message', $successMessage);
    }

    public function sendEmail($formInformation)
    {

        try {
            Mail::to('djhon5374@gmail.com')->send(new FormMail($formInformation));
        } catch (Exception $e) {
            return back()->with($e);
        }
        //
    }

}
