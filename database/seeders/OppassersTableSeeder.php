<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OppassersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oppassers')->insert([
            'image' => 'img/oppas_paleis_default.jpg',
            'adres' => 'Jantjelaan 69 ',
            'beschrijving' => "Een dieren paleis. Groot en Ruim. Elk dier voelt zich hier op gemak.",
            'user_id' => 2
        ]);

        DB::table('oppassers')->insert([
            'image' => 'img/oppas_huis_default.jpg',
            'adres' => 'Meerkoetlaan 21 ',
            'beschrijving' => "Alleen staand huis, geschikt voor kleine dieren. Grote achtertuin met veel gras.",
            'user_id' => 3
        ]);
    }
}
