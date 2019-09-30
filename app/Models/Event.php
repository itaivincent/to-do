<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'priority_level',
        'user_id',  
        'status',        
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
