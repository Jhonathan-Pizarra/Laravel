<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Incluimos todos los seeders que queremos ejecutaar
        $this->call(PlacesTableSeeder::class);
        $this->call(FestivalsTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
