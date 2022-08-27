<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\TokoSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PaketSeeder;
use Database\Seeders\LayananSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            TokoSeeder::class,
            LayananSeeder::class,
            PaketSeeder::class
        ]);
    }
}
