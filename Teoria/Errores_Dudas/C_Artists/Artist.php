<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'lastName', 'nationality','comingFrom', 'gender','phone', 'email', 'band', 'instrument','foodGroup','video','emergencyContact','emergencyPhone', 'emergencyMail']; //protected para que el valor conserve el último valor
    //$guarded: evita que los campos sean llenaos por el usuario
    //Preguntar a Chalo si el desplegable de los instrumentos que toca (que puede ser 1 o más)
    //Preguntar a Chalo si aqui debe ir el atributo foto

}
