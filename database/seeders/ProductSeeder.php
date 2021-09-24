<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
            "price"=>"100",
            "description"=>"Smartphone with different feature",
            "category"=>"mobile",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.oppo.com%2Fen%2F&psig=AOvVaw3ytTE9uPo_9ZAGaMzpGxG9&ust=1630855133338000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPid2vnO5fICFQAAAAAdAAAAABAD"
            ],
            [
                'name'=>'Xiaomi Mobile',
            "price"=>"300",
            "description"=>"Smartphone with different feature",
            "category"=>"mobile",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fgadgets.ndtv.com%2Fxiaomi-mi-11-price-in-india-98731&psig=AOvVaw0NqIw6kEAE5oCEnzTA6LTa&ust=1630855197069000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJCC2pfP5fICFQAAAAAdAAAAABAD"
            ],
            [
                'name'=>'OnePlus Mobile',
            "price"=>"400",
            "description"=>"Smartphone with different feature",
            "category"=>"mobile",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Foneplus-phones-95.php&psig=AOvVaw1TIeh1gKgJk0Xl5iIiylNM&ust=1630855231306000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiRtKjP5fICFQAAAAAdAAAAABAD"
            ]
        ]);

    }
}
