<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'admin@hsleiden.nl',
            'password' => bcrypt("laravel"),
        ]);

        DB::table('users')->insert([
            'name' => "Jeroen Rijsdijk",
            'email' => 'rijsdijk.j@hsleiden.nl',
            'password' => bcrypt("laravel"),
        ]);

        DB::table('users')->insert([
            'name' => "Joel Plas",
            'email' => 'plas.j@hsleiden.nl',
            'password' => bcrypt("laravel"),
        ]);

        DB::table('users')->insert([
            'name' => "Jasper Vonk",
            'email' => 's1122268@student.hsleiden.nl',
            'password' => bcrypt("laravel"),
        ]);

        DB::table('users')->insert([
            'name' => "Teresa Dinh",
            'email' => 's1120553@student.hsleiden.nl',
            'password' => bcrypt("laravel"),
        ]);
    }
}
