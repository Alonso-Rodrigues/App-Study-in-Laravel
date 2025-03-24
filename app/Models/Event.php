<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'date' => 'datetime',
        'items' => 'array',
    ];

    protected $guarded = [];

    protected $fillable = [
        'title',
        'date',
        'city',
        'private',
        'description',
        'items',
        'image',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
