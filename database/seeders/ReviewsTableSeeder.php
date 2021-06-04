<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'huisdier_eigenaar' => '3',
            'huisdier_soort' => 'Hond',
            'huisdier' => 'Eric',      
            'beoordeling' => "Eric kwam blij thuis! Ook is er fijn contact gehouden terwijl ik weg was. Regelmatig kreeg ik foto's toegestuurd. Aanrader!",
            'oppas' => '1'
        ]);

        DB::table('reviews')->insert([
            'huisdier_eigenaar' => '4',
            'huisdier_soort' => 'Fret',
            'huisdier' => 'Bob',      
            'beoordeling' => "Bob was zenuwachtig maar Jeroen stelde hem gerust. Fijn contact met update foto's. Houdt zich ook goed aan de afspraak; Gewoon goed.",
            'oppas' => '1'
        ]);

        DB::table('reviews')->insert([
            'huisdier_eigenaar' => '4',
            'huisdier_soort' => 'Vogel',
            'huisdier' => 'Debbie',      
            'beoordeling' => "Debbie had genoeg ruimte bij Joel in huis. Joel houdt zich aan de afspraken over medicijnen, erg fijn. Zeker een aanrader voor vogels!",
            'oppas' => '2'
        ]);
    }
}
