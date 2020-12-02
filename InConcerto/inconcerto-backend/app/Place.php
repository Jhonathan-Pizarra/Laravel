<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['name', 'address', 'admissibleness', 'capacity','caracteristics']; //protected para que el valor conserve el último valor

    //Evento
    public function events()
    {
        return $this->belongsTo('App\Event');
    }
}
