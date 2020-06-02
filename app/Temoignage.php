<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    protected $fillable = [
        'id', 'name', 'avatar','content','stand_id'
    ];
    public function stand() {
        return $this->belongsTo('App\Stand');
    }
}
