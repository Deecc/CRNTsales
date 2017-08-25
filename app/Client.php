<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'social_number'];

    public $timestamps = null;

	public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
