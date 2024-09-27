<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([

           'gender_desc' => 'Male',
        ]);
        DB::table('genders')->insert([

            'gender_desc' => 'Female',
         ]);
    }
}
