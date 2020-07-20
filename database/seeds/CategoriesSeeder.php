<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Чехол', 'tag' => 'case'],
            ['name' => 'Стекло', 'tag' => 'glass'],
            ['name' => 'Пленка', 'tag' => 'skin'],
            ['name' => 'Кабель', 'tag' => 'cable'],
            ['name' => 'Наушники', 'tag' => 'headphone'],
        ]);
    }
}
