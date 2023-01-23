<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeaderAddress;
use DB;

class HeaderAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderAddress::insert([
            [
            'title' =>'Address :',
            'desc' =>'2A0, Queenstown St, USA',
            'icon' =>'facebook',
            ],
            [
            'title' =>'Address :',
            'desc' =>'supporthere@mail.com',
            'icon' =>'envelope-open',
            ]
        ]);
    }
}
