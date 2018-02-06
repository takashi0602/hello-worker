<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'hour', 'minute', 'fee', 'form'
    ];
}
