<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
          
            [
               //User
               'name' => 'User',
               'email' => 'user@mail.com',
               'password' => bcrypt('12345678'), 
               
            ],
            [
               //User
               'name' => 'sumon',
               'email' => 'sumon@gmail.com',
               'password' => bcrypt('12345678'), 
               
            ],
            [
               //User
               'name' => 'tanjim',
               'email' => 'tanjim@gmail.com',
               'password' => bcrypt('12345678'), 
               
           ]
        
             
          ]);
    }
}
