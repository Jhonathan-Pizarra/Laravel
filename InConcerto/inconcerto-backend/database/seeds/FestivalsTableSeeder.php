<?php

use Illuminate\Database\Seeder;
use App\Festival;

class FestivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Festival::truncate(); //truncate es un método mágica

        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker

        for ($i=0; $i < 7; $i++) {
            //Llamamos un método estático:
            Festival::create([
                //Atributos $fillable
                'name' => $faker -> name, //Genra LoremIpsum para name, de tipo name
                'description' => $faker -> sentence,

                //fala la iamgen :p

            ]); //Laravel usa métodos mágicos, create, truncate, son llamados a través de un método call statick

        }
    }
}
