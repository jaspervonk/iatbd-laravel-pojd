<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huisdier_images_array = ["hond_default.jpg", "kat_default.jpg", "konijn_default.jpg", "vogel_default.jpg", "fret_default.jpg"];
        foreach($huisdier_images_array as $huisdier_image){
            DB::table('images')->insert([
                'image' => 'img/' . $huisdier_image,
                'soort' => "huisdier"
            ]);
        }

        $oppas_images_array = ["oppas_huis_default.jpg", "oppas_paleis_default.jpg"];
        foreach($oppas_images_array as $oppas_image){
            DB::table('images')->insert([
                'image' => 'img/' . $oppas_image,
                'soort' => "oppas"
            ]);
        }
    }
}
