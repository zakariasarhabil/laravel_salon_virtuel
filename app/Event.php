<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'id', 'nom','description'
    ];

    public function espace() {
        return $this->hasMany('App\EspaceExposant');
    }
}
