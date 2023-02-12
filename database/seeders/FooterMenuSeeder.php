<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FooterMenu;
use DB;


class FooterMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterMenu::insert([
            [
                'menu_name' =>'Travel and Aviation',
            ],
            [
                'menu_name' =>'Business Services',
            ],
            [
                'menu_name' =>'Consumer Products',
            ],
            [
                'menu_name' =>'Financial Services',
            ],
            [
                'menu_name' =>'Software Research',
            ],
            [
                'menu_name' =>'Quality Resourcing',
            ]
        ]);
    }
}
