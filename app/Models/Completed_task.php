<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completed_task extends Model
{
     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
     
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'status',
        'user_id',
        'description',
       
    ];

    /**
     * The relationship to the owning user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
