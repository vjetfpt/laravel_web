<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for($i=0;$i<10;$i++){
            $data=[
                'name'=>$faker->name,
                'price'=>random_int(1,50),
                'quantity'=>random_int(100,300),
                'category_id'=>random_int(1,10)
            ];
            DB::table('products')->insert($data);
        }
    }
}
