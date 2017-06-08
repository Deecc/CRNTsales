<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    public $timestamps = null;

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
