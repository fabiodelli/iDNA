<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function salvaDati(Request $request)
    {
        // Validazione dei dati del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'birthplace' => 'required|string|max:255',
            'birthday' => 'required|date',
            // Aggiungi altre regole di validazione per gli altri campi se necessario
        ]);

        // Creazione di un nuovo record nel database utilizzando il modello
        $nuovoDato = new Form();
        $nuovoDato->name = $request->input('name');
        $nuovoDato->email = $request->input('email');
        $nuovoDato->birthplace = $request->input('birthplace');
        $nuovoDato->birthday = $request->input('birthday');
        $nuovoDato->phone = $request->input('phone', null); // Se il campo 'phone' non è compilato, verrà salvato come null
        $nuovoDato->company = $request->input('company', null); // Se il campo 'company' non è compilato, verrà salvato come null
        $nuovoDato->message = $request->input('message', null); // Se il campo 'message' non è compilato, verrà salvato come null
        $nuovoDato->privacy = $request->has('privacy') ? true : false; // Verifica se la casella di controllo è selezionata
        $nuovoDato->save();

        // Reindirizzamento con un messaggio di successo
        return redirect()->back()->with('success', 'Dati salvati con successo!');
    }
}


