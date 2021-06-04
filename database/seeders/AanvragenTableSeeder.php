<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AanvragenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 4,
            'huisdier' => 1,
            'oppas' => 1,
            'status' => "voorstel",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 4,
            'huisdier' => 2,
            'oppas' => 1,
            'status' => "afronden",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 4,
            'huisdier' => 5,
            'oppas' => 2,
            'status' => "geaccepteerd",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 5,
            'huisdier' => 3,
            'oppas' => 1,
            'status' => "geweigerd",
        ]);

        DB::table('aanvragen')->insert([
            'huisdier_eigenaar' => 5,
            'huisdier' => 4,
            'oppas' => 2,
            'status' => "afronden",
        ]);
    }
}
