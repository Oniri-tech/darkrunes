<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'pseudo' => ['required', 'string', 'unique:utilisateurs', 'min:3'],
            'email' =>['required', 'email', 'unique:utilisateurs'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Pour de raisons de sécurité, votre mot de passe doit faire au moins :min caractères',
        ]);

        $utilisateur = Utilisateur::create([
            'pseudo' => request('pseudo'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        return "L'utilisateur ". request('pseudo') . " a bien été inscrit";
    }
}
