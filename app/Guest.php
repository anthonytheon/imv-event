<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'email',
        'business',
        'contact',
    ];

    public function events()
    {
        return $this->belongsTo(Event::class,'id','event_id');
    }
}
