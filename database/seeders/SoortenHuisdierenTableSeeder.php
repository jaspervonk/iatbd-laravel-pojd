<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoortenHuisdierenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soorten_huisdieren_array = ["Hond", "Kat", "Konijn", "Vogel", "Fret"];
        foreach($soorten_huisdieren_array as $soort_huisdier){
            DB::table('soorten_huisdieren')->insert([
                'soort' => $soort_huisdier
            ]);
        }
    }
}
