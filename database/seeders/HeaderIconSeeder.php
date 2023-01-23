<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeaderIcon;
use DB;

class HeaderIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderIcon::insert([
            [
                'icon' =>'facebook',
            ],
            [
                'icon' =>'twitter',
            ],
            [
                'icon' =>'linkedin',
            ],
            [
                'icon' =>'pinteres',
            ],
        ]);
    }
}
