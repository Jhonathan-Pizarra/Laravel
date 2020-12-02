<?php

use App\Place;
use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::truncate(); //truncate es un método mágica

        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker

        for ($i=0; $i < 15; $i++) {
            //Llamamos un método estático:
            Place::create([
                //Atributos $fillable
                'name' => $faker -> name,
                'address' => $faker -> address,
                'admissibleness' => $faker -> boolean,
                'capacity' => $faker -> numberBetween(0,1000),
                'caracteristics'=> $faker -> text,
                //foto
                //mapas

            ]);

        }
    }
}
