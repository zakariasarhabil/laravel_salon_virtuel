<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exposant extends Model
{

    protected $fillable = [
        'id', 'nom', 'prenom'
    ];
    public function stand() {
        return $this->hasMany('App\Stand');
    }
}
