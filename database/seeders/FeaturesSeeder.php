<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Featurs;
use Illuminate\Support\Carbon;
use DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Featurs::factory()->count(10)->create();

        Featurs::insert([
          
            [
               'title' => 'Consumer Insights',
               'description' => 'The east side to a deluxe apartment in move on up to the east side',
               'image' => 'images/1.png',
               
            ],
            [
               'title' => 'Emerging Ideas',
               'description' => 'It is a long established fact that a reader will be distracted by the',
               'image' => 'images/2.png',
               
            ],
            [
               'title' => 'Thought Leadership',
               'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
               'image' => 'images/3.png',
               
            ],
            [
               'title' => 'Marketing Goals',
               'description' => 'Letraset sheets containing Lorem Ipsum passages, and more recently with',
               'image' => 'images/4.png',
               
            ]

        
             
          ]);
    }
}
