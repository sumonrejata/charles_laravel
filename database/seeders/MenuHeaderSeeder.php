<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuHeader;
use DB;

class MenuHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuHeader::insert([
            [
                'menu_title' =>'Home',
            ],
            [
                'menu_title' =>'About',
            ],
            [
                'menu_title' =>'Service',
            ],
            [
                'menu_title' =>'Portfolio',
            ],
            [
                'menu_title' =>'Blog',
            ],
            [
                'menu_title' =>'Contact',
            ]
        ]);
    }
}
