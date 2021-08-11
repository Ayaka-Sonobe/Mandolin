<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = [
        'concert_name',
        'start_time',
        'area',
        'prefecture',
        'place',
        'price',
        'song',
        'link',
        'addition',
    ];
}
