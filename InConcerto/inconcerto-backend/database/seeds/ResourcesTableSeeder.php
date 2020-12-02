<?php

use Illuminate\Database\Seeder;
use App\Resource;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::truncate();

        $faker = \Faker\Factory::create(); //utilizaremos el método crear de Faker

        for ($i=0; $i < 25; $i++) {
            //Llamamos un método estático: ['name', 'quantity', 'caracteristics']; /
            Resource::create([
                //Atributos $fillable
                'name' => $faker -> name, //Genra LoremIpsum para name, de tipo oración
                'quantity' => $faker -> randomNumber(),
                'description' => $faker -> text,

            ]);

        }
    }
}
