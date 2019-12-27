<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(SubcategoriesTableSeeder::class);
        $this->call(SubsubcategoriesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
    }
}
