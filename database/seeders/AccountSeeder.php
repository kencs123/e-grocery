<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'genders_id' => '1',
            'roles_id' => '1',
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminganteng123'),
            'display_picture_link' => '/../account_image/profil1.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),


        ]);

        DB::table('accounts')->insert([
            'genders_id' => '2',
            'roles_id' => '2',
            'first_name'=> 'user',
            'last_name' => 'user',
            'email'=>'user@gmail.com',
            'password' => Hash::make('userlucu123'),
            'display_picture_link'=>'/../account_image/profil2.jpg',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
    }
}
