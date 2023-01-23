<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Carbon;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            [
                'title' => 'Business Services',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/3.jpg',
                'btn_text' => 'READ MORE',
            ],
            [
                'title' => 'Consumer Product',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/4.jpg',
                'btn_text' => 'READ MORE',
            ],
            [
                'title' => 'Financial Services',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/5.jpg',
                'btn_text' => 'READ MORE',
            ],
            [
                'title' => 'Travel and Aviation',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/6.jpg',
                'btn_text' => 'READ MORE',
            ],
            [
                'title' => 'Software Research',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/7.jpg',
                'btn_text' => 'READ MORE',
            ],
            [
                'title' => 'Quality Resourcing',
                'desc' => 'The tiny ship today stiller',
                'image' => 'images/service/8.jpg',
                'btn_text' => 'READ MORE',
            ],
            
        ]);
    }
}
