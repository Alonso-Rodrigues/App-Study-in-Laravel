<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
    'date' => 'datetime',
    'items' => 'array',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
