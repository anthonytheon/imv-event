<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'url', 'qrcode' 
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'event_id', 'id');
    }
}
