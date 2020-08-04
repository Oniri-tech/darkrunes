<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $fillable = ['utilisateur_id', 'peuple', 'niveau', 'experience'];
}
