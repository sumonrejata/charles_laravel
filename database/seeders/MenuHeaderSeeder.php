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
                'menu_url' =>'home.php',
            ],
            [
                'menu_title' =>'About',
                'menu_url' =>'about.php',
            ],
            [
                'menu_title' =>'Service',
                'menu_url' =>'service.php',
            ],
            [
                'menu_title' =>'Portfolio',
                'menu_url' =>'portfolio.php',
            ],
            [
                'menu_title' =>'Blog',
                'menu_url' =>'blog.php',
            ],
            [
                'menu_title' =>'Contact',
                'menu_url' =>'contact.php',
            ]
        ]);
    }
}
