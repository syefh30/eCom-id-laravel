<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Mie Ayam',
                "price"=>"5000",
                "description"=>"extra daging jadi hemat",
                "category"=>"makanan",
                "gallery"=>"https://images.tokopedia.net/img/KRMmCm/2022/8/15/a4b7d013-9438-46b2-906b-4c374ec82236.jpg"
            ],
            [
                'name'=>'Aqua',
                "price"=>"3000",
                "description"=>"segar dan sehat",
                "category"=>"minuman",
                "gallery"=>"https://d21a1fytkm286.cloudfront.net/Products_466837_image_B420_1028184013.jpg"
            ],
            [
                'name'=>'Teh manis',
                "price"=>"2500",
                "description"=>"manis dan hangat",
                "category"=>"minuman",
                "gallery"=>"https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2021/02/25/tehjpg-20210225010850.jpg"
            ],
            [
                'name'=>'Sup buah',
                "price"=>"4000",
                "description"=>"segey dan nikmat",
                "category"=>"minuman",
                "gallery"=>"https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/11/Resep-Sop-buah.jpg?fit=500%2C625&ssl=1"
            ]
        ]);
    }
}
