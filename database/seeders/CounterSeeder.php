<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Counter;
use DB;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::insert([
            [
                'title' =>'Years of Excellence',
                'number' =>'24',
            ],
            [
                'title' =>'Cases Completed',
                'number' =>'53',
            ],
            [
                'title' =>'Client Satisfaction',
                'number' =>'100',
            ],
            [
                'title' =>'Consultants',
                'number' =>'30',
            ]
        ]);
    }
}
