<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin@123'),
            'status'=>1,
            'admin_type'=>'super-admin'
        ]);
        \App\Models\Admin::create( [
            'name'=>'sameer',
            'username'=>'sameer',
            'email'=>'sameer@gmail.com',
            'password'=>bcrypt('sameer@123'),
            'status'=>1,
            'admin_type'=>'super-admin'
    ]);
    }
}
