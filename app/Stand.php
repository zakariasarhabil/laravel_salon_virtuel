<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{

    // protected $table = 'stands';
    protected $fillable = [
        'id', 'description', 'status',
    ];
    public function reseau() {
        return $this->hasMany('App\Reseau');
    }
}
