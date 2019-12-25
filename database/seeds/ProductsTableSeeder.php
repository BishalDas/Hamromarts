<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Product::create([
            'name' => 'phone',
            'category' => 'a',
            'subcategory'=>'aa',
            'subsubcategory'=>'aaa',
            'price'=>'100',
            'description'=>'fff',
            'phone'=>'98457',
            'uid' => 1,

        ]);
        \App\Models\Product::create([
            'category' => 'b',
            'subcategory'=>'bb',
            'subsubcategory'=>'bbb',
            'price'=>'10',
            'description'=>'fff',
            'phone'=>'9857',
            'uid' => 1,

        ]);

    }
}
