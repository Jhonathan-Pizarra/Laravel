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
        $this->call(BandsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);

    }
}
