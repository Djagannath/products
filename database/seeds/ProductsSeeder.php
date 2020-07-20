<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $start = 0;
        $data = [];

        for ($i = 0; $i < 2000; $i++) {
            $item = [
                'title' => Str::random(20),
                'image' => $faker->imageUrl(640, 480, 'technics'),
                'price' => $faker->randomFloat(2, 50, 500),
                'category_id' => rand(1, 5),
            ];
            $start++;

            $data[] = $item;
            if ($start == 500) {
                DB::table('products')->insert($data);
                $data = [];
                $start = 0;
            }
        }
    }
}
