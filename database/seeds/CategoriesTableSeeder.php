<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name' => 'Food and Beverage',
            'status'=>'1'

        ]);

        \App\Models\Category::create([
            'name' => 'Fashion Wears',
            'status'=>'1'

        ]);
        \App\Models\Category::create([
            'name' => 'Electronic',
            'status'=>'1'

        ]);
    }
}
