<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitted; // Assicurati di importare la tua classe Mailable qui

class FormController extends Controller
{
    public function salvaDati(Request $request)
    {
        // Validazione dei dati del form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'birthplace' => 'required|string|max:255',
            'birthday' => 'required|date',
            // Continua con le altre regole di validazione come necessario
        ]);

        // Creazione di un nuovo record nel database utilizzando il modello
        $nuovoDato = new Form();
        $nuovoDato->name = $validatedData['name'];
        $nuovoDato->email = $validatedData['email'];
        $nuovoDato->birthplace = $validatedData['birthplace'];
        $nuovoDato->birthday = $validatedData['birthday'];
        $nuovoDato->phone = $request->input('phone', null); 
        $nuovoDato->company = $request->input('company', null);
        $nuovoDato->message = $request->input('message', null);
        $nuovoDato->privacy = $request->has('privacy') ? true : false;
        $nuovoDato->save();

        $data = $request->all();

        // Invio dell'email di conferma
        Mail::to($request->email)->send(new FormSubmitted($data));

        // Ritorno di una risposta JSON in caso di successo
        return response()->json(['success' => 'Dati salvati con successo e email di conferma inviata.']);
    }
}
