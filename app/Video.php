<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $fillable = [
        'id', 'name', 'link', 'stand_id'
    ];
    public function stand() {
        return $this->belongsTo('App\Stand');
    }

}
