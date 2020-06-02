<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspaceExposant extends Model
{

    protected $fillable = [
        'id', 'name','event_id'
    ];


    public function stand() {
        return $this->hasMany('App\Stand');
    }

    public function event() {
        return $this->belongsTo('App\Event');
    }

}
