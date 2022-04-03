<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('brands')->insert(
        //     [
        //         ['brand_name' => 'Alpina'],
        //         ['brand_name' => 'Bering'],
        //         ['brand_name' => 'Breitling'],
        //         ['brand_name' => 'Calvin Klein'],
        //         ['brand_name' => 'Candino'],
        //         ['brand_name' => 'Century'],
        //         ['brand_name' => 'Certina'],
        //         ['brand_name' => 'Condor'],
        //         ['brand_name' => 'D&G'],
        //         ['brand_name' => 'Enicar'],
        //         ['brand_name' => 'Longines'],
        //     ]
        // );
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => bcrypt('1'),
                
        //     ],
        //     [
        //         'name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'password' => bcrypt('1'),
        //     ]
        // ]);

        DB::table('products')->insert([
            ['category_id' => '1', 'brand_id' => '1','product_price' => '2100','product_image' => 'a1.png','product_name' => 'Alpina AL-525VG4E6',],
            ['category_id' => '1', 'brand_id' => '1','product_price' => '1860','product_image' => 'a2.png','product_name' => 'Alpina AL-284LBBW5SAQ6',],
            ['category_id' => '1', 'brand_id' => '1','product_price' => '1860','product_image' => 'a3.png','product_name' => 'Alpina AL-284LBBW5AQ6',],
            ['category_id' => '1', 'brand_id' => '1','product_price' => '3200','product_image' => 'a4.png','product_name' => 'Alpina AL-750VG4E6',],
            ['category_id' => '1', 'brand_id' => '1','product_price' => '2300','product_image' => 'a5.png','product_name' => 'Alpina AL-525B4E6B',],
            
            ['category_id' => '2', 'brand_id' => '4','product_price' => '420','product_image' => 'ck1.png','product_name' => 'Calvin Klein K7E23151',],
            ['category_id' => '2', 'brand_id' => '4','product_price' => '210','product_image' => 'ck2.png','product_name' => 'Calvin Klein K7E23146',],
            ['category_id' => '2', 'brand_id' => '4','product_price' => '170','product_image' => 'ck3.png','product_name' => 'Calvin Klein K6S2N116',],
            ['category_id' => '2', 'brand_id' => '4','product_price' => '720','product_image' => 'ck4.png','product_name' => 'Calvin Klein K6R223626',],
            ['category_id' => '2', 'brand_id' => '4','product_price' => '356','product_image' => 'ck5.png','product_name' => 'Calvin Klein K6R23526',],

            ['category_id' => '1', 'brand_id' => '2','product_price' => '250','product_image' => 'b1.png','product_name' => 'Bering 11390-404',],
            ['category_id' => '1', 'brand_id' => '2','product_price' => '210','product_image' => 'b2.png','product_name' => 'Bering 11390-754',],
            ['category_id' => '1', 'brand_id' => '2','product_price' => '200','product_image' => 'b3.png','product_name' => 'Bering 11394-404',],
            ['category_id' => '1', 'brand_id' => '2','product_price' => '600','product_image' => 'b4.png','product_name' => 'Bering 11396-539',],
            ['category_id' => '1', 'brand_id' => '2','product_price' => '510','product_image' => 'b5.png','product_name' => 'Bering 11393-504',],

            ['category_id' => '3', 'brand_id' => '9','product_price' => '510','product_image' => 's1.png','product_name' => 'Garmin Forerunner 55-010-02562-51',],
            ['category_id' => '3', 'brand_id' => '10','product_price' => '580','product_image' => 's2.png','product_name' => 'Garmin Venu SQ Music 010-50481',],
            ['category_id' => '3', 'brand_id' => '9','product_price' => '810','product_image' => 's3.png','product_name' => 'Garmin Forerunner 245 Music 010-52104',],
            ['category_id' => '3', 'brand_id' => '10','product_price' => '920','product_image' => 's4.png','product_name' => 'Garmin Venu 2S 010-532104',],
            ['category_id' => '3', 'brand_id' => '10','product_price' => '420','product_image' => 's5.png','product_name' => 'Garmin Venu SQ Music 2 Plus 010-5042131',],

        ]);
    }
}
