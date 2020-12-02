<?php

namespace App\Http\Controllers;

//use App\Resource; No le usé así porque Resource es una "palabra reservada"
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    //Vamos a hacer controladores, tareas que tebe realizar
    public function index(){
        return App\Resource::all();
    }

    public function show(App\Resource $resource){ //creo que resource es una palabra reservada....mejor le pongo App\Resource
        return $resource;
    }

    public function store(Request $request){
        $resource =  App\Resource::create($request ->all());
        return response() -> json($resource, 201); //codigo 201 correspodnde a creare
    }

    public function update(Request $request, App\Resource $resource){
        $resource -> update($request->all());
        return response() -> json($resource, 200); //codigo 200 correspodnde a modificacion exitosa
    }

    public function delete(Request $request, App\Resource $resource){
        $resource -> delete();
        return response() -> json(null, 404); //codigo 204 correspodnde a not found
    }

}
