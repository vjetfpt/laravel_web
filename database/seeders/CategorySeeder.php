<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use DB;
class CategorySeeder extends Seeder
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
                'name'=>$faker->name
            ];
            DB::table('categories')->insert($data);
        }
    }
}
