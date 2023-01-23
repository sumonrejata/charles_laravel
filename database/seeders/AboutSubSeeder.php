<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSub;
use Illuminate\Support\Carbon;

class AboutSubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutSub::insert([
            [
                'title' => 'Vision',
                'icon' => 'flaticon-star',   
            ],
            [
                'title' => 'Missions',
                'icon' => 'flaticon-medal',   
            ],
            [
                'title' => 'Goals',
                'icon' => 'flaticon-target',   
             ]
        ]);
    }
}
