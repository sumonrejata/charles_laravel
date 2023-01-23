<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeaderLogo;
use DB;

class HeaderLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderLogo::insert([
            [
                'image' =>'images/logo/logo.png',
            ]
        ]);
    }
}
