<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            
            'item_name'=>'Durian',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>18000,
            'item_picture_link' => 'https://images.pexels.com/photos/3888735/pexels-photo-3888735.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Anggur',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>21000,
            'item_picture_link' => 'https://images.pexels.com/photos/708777/pexels-photo-708777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Jeruk',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>25000,
            'item_picture_link' => 'https://images.pexels.com/photos/161559/background-bitter-breakfast-bright-161559.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Kiwi',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>31000,
            'item_picture_link' => 'https://images.pexels.com/photos/51312/kiwi-fruit-vitamins-healthy-eating-51312.jpeg?auto=compress&cs=tinysrgb&w=1600'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Semangka',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>20000,
            'item_picture_link' => 'https://images.pexels.com/photos/260426/pexels-photo-260426.jpeg?auto=compress&cs=tinysrgb&w=1600'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Cherry',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>15000,
            'item_picture_link' => 'https://images.pexels.com/photos/109274/pexels-photo-109274.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Kentang',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>10000,
            'item_picture_link' => 'https://images.pexels.com/photos/14650501/pexels-photo-14650501.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Labu',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>27000,
            'item_picture_link' => 'https://images.pexels.com/photos/5358857/pexels-photo-5358857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);
        DB::table('items')->insert([
            
            'item_name'=>'Bawang Merah',
            'item_desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus excepturi laudantium error numquam ab tenetur, nostrum cumque architecto quasi!',
            'price'=>70000,
            'item_picture_link' => 'https://images.pexels.com/photos/15421637/pexels-photo-15421637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ]);











    }
}
