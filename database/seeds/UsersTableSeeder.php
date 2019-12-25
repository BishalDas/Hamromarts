<?php

use Illuminate\Database\Seeder;
use App\user;
use App\role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'User',
            'username'=>'user',
            'email'=>'user@gmail.com',
            'phone'=>9860795682,
            'status'=>0,
            'password'=>bcrypt('user@123')
        ]);

        \App\Models\User::create([
            'name'=>'Samir',
            'username'=>'Samir',
            'phone'=>9860795681,
            'status'=>0,
            'email'=>'samirpar788@gmail.com',
            'password'=>bcrypt('samir@123')
        ]);
        /* User::truncate();

         $adminRole= Role::where('name','admin')->first();
         $sellerRole=Role::where('name','seller')->first();
         $buyerRole=Role::where('name','buyer')->first();



         $seller=User::create([
             'name'=>'seller',
             'email'=>'seller@gmail.com',
             'password'=> bcrypt('12345678')
         ]);

         $buyer=User::create([
             'name'=>'seller',
             'email'=>'buyer@gmail.com',
             'password'=> bcrypt('12345678')
         ]);

        /* $admin->roles()->attach($adminRole);
         $buyer->roles()->attach($buyerRole);
         $seller->roles()->attach($sellerRole);*/
    }
}
