<?php

namespace App\Http\Controllers;

use App\Personnage;

class PersonnageController extends Controller
{
    public function new()
    {
        return view('new-personnage');
    }

    public function traitement()
    {
        request()->validate([
            'peupleselect' => ['required'],
        ]);

        Personnage::create([
            'utilisateur_id' => auth()->id(),
            'peuple' => request('peupleselect'),
            'niveau' => 1,
            'experience' => 1,
        ]);

        flash("Personnage crée avec succès.")->success();
        return redirect('/');
    }
}
