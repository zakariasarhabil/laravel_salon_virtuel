<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienEx extends Model
{
    protected $fillable = [
        'id', 'name','link', 'stand_id'
    ];

    public function stand() {
        return $this->belongsTo('App\Stand');
    }
}
