<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    protected $fillable = ['name', 'description']; //image aún no le incorporo la imagen


    public function events()
    {
        return $this->hasMany('App\Event');
    }


}
