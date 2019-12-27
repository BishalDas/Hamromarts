<?php

use Illuminate\Database\Seeder;

class SubsubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Subsubcategory::create([
            'name' => 'Milk',
            'subcategory_id'=>'1'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Ghee',
            'subcategory_id'=>'1'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Cake',
            'subcategory_id'=>'2'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Bread',
            'subcategory_id'=>'2'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Biscuits',
            'subcategory_id'=>'3'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Chocolates',
            'subcategory_id'=>'3'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Almond',
            'subcategory_id'=>'4'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Groundnut',
            'subcategory_id'=>'4'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Chicken',
            'subcategory_id'=>'5'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Pork',
            'subcategory_id'=>'5'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Cold Drinks',
            'subcategory_id'=>'6'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Hard Drinks',
            'subcategory_id'=>'6'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Daura Surwal',
            'subcategory_id'=>'7'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Jacket',
            'subcategory_id'=>'7'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Sari',
            'subcategory_id'=>'8'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Leenga',
            'subcategory_id'=>'8'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Baby1',
            'subcategory_id'=>'9'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Baby2',
            'subcategory_id'=>'9'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Lava',
            'subcategory_id'=>'10'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Huawei',
            'subcategory_id'=>'10'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Mixture',
            'subcategory_id'=>'11'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Washing Machine',
            'subcategory_id'=>'11'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Dslr',
            'subcategory_id'=>'12'
        ]);
        \App\Models\Subsubcategory::create([
            'name' => 'Digital',
            'subcategory_id'=>'12'
        ]);
    }
}
