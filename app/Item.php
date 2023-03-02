<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = [
        'filename', 'event_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class,'id','event_id');
    }
}
