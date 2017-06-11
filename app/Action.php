<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'enable',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
