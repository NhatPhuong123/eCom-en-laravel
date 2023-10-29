<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'description'=>"A smartphone with 8gb ram and much more feature",
                'category'=>"mobile",
                'gallery'=>"https://cdn.tgdd.vn/Products/Images/42/313199/samsung-galaxy-a05-thumb-600x600.jpg",
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'400',
                'description'=>"A smart tv with much more feature",
                'category'=>"tv",
                'gallery'=>"https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_31893/android-tivi-pa_main_771_450.png.webp",
            ],
            [
                'name'=>'Sony TV',
                'price'=>'500',
                'description'=>"A smartphone with much more feature",
                'category'=>"tv",
                'gallery'=>"https://cdn.tgdd.vn/Products/Images/1942/274761/android-sony-4k-55-inch-kd-55x80k-180322-022717-550x340.png",
            ],
            [
                'name'=>'LG fridge',
                'price'=>'200',
                'description'=>"A fridge with much more feature",
                'category'=>"fridge",
                'gallery'=>"https://cdn.tgdd.vn/Products/Images/1943/307871/lg-gr-b256jds-600x600.jpg",
            ]
        ]);
    }
}
