<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisdierenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdieren')->insert([
            'image' => "img/hond_default.jpg",
            'naam' => "Max",
            'soort' => "Hond",
            'oppasdatum' => "2021-5-31",
            'aantal_dagen' => 3,
            'dagtarief' => 5.25,
            'beschrijving' => "Max moet 2 keer per dag uitgelaten worden.",
            'status' => 'beschikbaar',
            'user_id' => 4
        ]);

        DB::table('huisdieren')->insert([
            'image' => "img/kat_default.jpg",
            'naam' => "Jill",
            'soort' => "Kat",
            'oppasdatum' => "2021-6-13",
            'aantal_dagen' => 4,
            'dagtarief' => 6.75,
            'beschrijving' => "Jill krijgt speciaal voedsel en medicijnen.",
            'status' => 'behandeling',
            'user_id' => 4
        ]);

        DB::table('huisdieren')->insert([
            'image' => "img/konijn_default.jpg",
            'naam' => "Flipke",
            'soort' => "Konijn",
            'oppasdatum' => "2021-6-15",
            'aantal_dagen' => 2,
            'dagtarief' => 5.25,
            'beschrijving' => "Flipke mag vrijuit lopen in de achtertuin",
            'status' => 'beschikbaar',
            'user_id' => 5
        ]);

        DB::table('huisdieren')->insert([
            'image' => "img/vogel_default.jpg",
            'naam' => "Kiwi",
            'soort' => "Vogel",
            'oppasdatum' => "2021-6-23",
            'aantal_dagen' => 6,
            'dagtarief' => 6.50,
            'beschrijving' => "Kiwi krijgt snachts eten.",
            'status' => 'behandeling',
            'user_id' => 5
        ]);

        DB::table('huisdieren')->insert([
            'image' => "img/fret_default.jpg",
            'naam' => "Dexter",
            'soort' => "Fret",
            'oppasdatum' => "2021-6-26",
            'aantal_dagen' => 1,
            'dagtarief' => 4.20,
            'beschrijving' => "Dexter moet af en toe spelen om zijn energie kwijt te kunnen.",
            'status' => 'behandeling',
            'user_id' => 4
        ]);
    }
}
