<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function monProfil()
    {
        if (!Auth::user()->personnage) {
            return redirect('/new-personnage');
        }
        return view('mon-compte', [
            'utilisateur' => Auth::user(),
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
