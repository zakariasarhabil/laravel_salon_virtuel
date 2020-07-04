<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{

    // protected $table = 'stands';
    protected $fillable = [
        'id', 'description', 'name'
        //  'espace_exposant_id','theme_id', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reseau() {
        return $this->hasMany('App\Reseau');
    }

    public function video() {
        return $this->hasMany('App\Video');
    }

    public function galerie() {
        return $this->hasMany('App\Galerie');
    }

    public function temoignage() {
        return $this->hasMany('App\Temoignage');
    }

    public function document() {
        return $this->hasMany('App\Document');
    }

    public function lienex() {
        return $this->hasMany('App\LienEx');
    }

    public function theme() {
        return $this->belongsTo('App\Theme');
    }

    public function espace() {
        return $this->belongsTo('App\EspaceExposant');
    }


}

