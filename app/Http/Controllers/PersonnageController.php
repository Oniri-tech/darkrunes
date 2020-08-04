<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Auth as basicAuth;
use App\Personnage;

class PersonnageController extends Controller
{
    public function new()
    {
        if (basicAuth::user()->personnage) {
            flash("Vous ne pouvez créer qu'un seul personnage")->error();
            return redirect('/mon-profil');
        }
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
