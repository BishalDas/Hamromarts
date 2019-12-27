<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Subcategory::create([
            'name' => 'Milk and Dairy Products',
            'category_id'=>'1'
        ]);

        \App\Models\Subcategory::create([
            'name' => 'Bakery & Confectionery Products',
            'category_id'=>'1'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Chocolates, Biscuits & Cookies',
            'category_id'=>'1'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Dry Fruits & Nuts',
            'category_id'=>'1'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Meat & Poultry Food',
            'category_id'=>'1'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Drinks',
            'category_id'=>'1'
        ]);

        //Fashion Wears
        \App\Models\Subcategory::create([
            'name' => 'Men',
            'category_id'=>'2'
        ]);

        \App\Models\Subcategory::create([
            'name' => 'Women',
            'category_id'=>'2'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Children',
            'category_id'=>'2'
        ]);

        //Electronics
        \App\Models\Subcategory::create([
            'name' => 'Phone',
            'category_id'=>'3'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Home Appliance',
            'category_id'=>'3'
        ]);
        \App\Models\Subcategory::create([
            'name' => 'Camera',
            'category_id'=>'3'
        ]);
    }
}
