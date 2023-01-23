<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurPartner;
use DB;

class OurPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurPartner::insert([
            [
                'image' =>'images/logo/logo.png',
            ],
            [
                'image' =>'images/logo/p-1.png',
            ],
            [
                'image' =>'images/logo/p-2.png',
            ],
            [
                'image' =>'images/logo/p-3.png',
            ],
            [
                'image' =>'images/logo/p-4.png',
            ],
            [
                'image' =>'images/logo/p-5.png',
            ]
        ]);
    }
}
