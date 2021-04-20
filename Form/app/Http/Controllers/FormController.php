<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //

    public function index()
    {

        $legalFormArray = [
            'Proprietorship' => 'Eenmanszaak',
            'VOF' => 'VOF',
            'Partnership' => 'Maatschap',
            'Private-company' => 'Besloten vennootschap',
            'Limited-company' => 'Naamloze vennootschap',
            'Foundation' => 'Stichting',
            'Association' => 'Vereniging',
            'Other' => 'Overig',
        ];

        foreach ($legalFormArray as $legalForm) {
    }

        return view('welcome');
    }

    public function store(Request $request)
    {
        $SendEmail = new SendEmailController();
        $successMessage = 'De gegevens zijn succesvol ingevuld en verzonden!';


        foreach ($_POST as $info) {
            var_dump($info);
    }
        die();


        $this->validate($request, [
            'legal-form' => 'required|in:Proprietorship,VOF,Partnership,Private-company,Limited-company,Foundation,Association,Other',
            'House-number' => 'required|integer',
            'postal-code-number' => 'required|max:100|digits:4',
            'postal-code-text' => 'required|size:2|alpha',
            'E-mail-client' => 'required|email',
            'E-mail-financial-correspondence' => 'required|email',
        ]);


        $SendEmail->index();


        return back()->with('message', $successMessage);;
    }

}
