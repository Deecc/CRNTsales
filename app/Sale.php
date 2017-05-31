<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function cabins()
    {
        return $this->hasMany('App\Cabin');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
