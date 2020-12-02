<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['name', 'quantity', 'description']; //protected para que el valor conserve el último valor


    public function event()
    {
        return $this->belongsToMany('App\Event')->withPivot('state');
    }

}
