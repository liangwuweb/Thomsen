<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //The attributes that should be cast to native types.

    protected $casts = [
        'has_video' => 'boolean',
    ];
}
