<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use Illuminate\Support\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::insert([
            [
                'title' => 'About Our Company',
                'description' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family The government they survive',
                'image' => 'images/about/1.jpg',
                
             ]
        ]);
    }
}
