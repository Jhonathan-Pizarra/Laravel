<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::truncate(); //truncate es un método mágica

        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker

        for ($i=0; $i < 10; $i++) {

            //Arreglos de los que se escogerá uno de sus elementos
            $foodGroup = $faker->randomElement(['Vegano', 'Vegetariano','Omnívoro', 'Alimentación Macrobiótica', 'Crudista']);
            $gender = $faker->randomElement(['male', 'female']);

            //Llamamos un método estático:
            Artist::create([
                //Atributos $fillable
                'name' => $faker -> name, //Genra LoremIpsum para name, de tipo name
                'lastname' => $faker -> name,
                'dni_passport' => $faker -> buildingNumber, //necesito controlar esto
                'nationality' => $faker -> country,
                'comingFrom'  => $faker -> country,
                'gender' => $gender, //llamo al genero fake del arreglo random
                'phone' => $faker -> phoneNumber,
                'email' => $faker -> email,
                'band' => $faker -> name,
                'instrument'=> $faker -> name,
                'foodGroup'=> $foodGroup,
                'video' => $faker -> boolean,
                'emergencyContact' => $faker -> name,
                'emergencyPhone'=> $faker -> phoneNumber,
                'emergencyMail'=> $faker -> email,

                //Estos otros atributos vienen vinculados:
                //'passage'=> $faker -> boolean,
                //'orchest'=> $faker -> sentence, //orquesta = banda

            ]); //Laravel usa métodos mágicos, create, truncate, son llamados a través de un método call statick

        }
    }
}
