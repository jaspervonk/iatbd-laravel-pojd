<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            SoortenHuisdierenTableSeeder::class,
            HuisdierenTableSeeder::class,
            OppassersTableSeeder::class,
            ImagesTableSeeder::class,
            AanvragenTableSeeder::class,
            ReviewsTableSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
