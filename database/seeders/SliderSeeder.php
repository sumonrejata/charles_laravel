<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;
use DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::insert([
            [
            'title_1' =>'We IMPROVE YOUR',
            'title_2' =>'SALES EFFICIENCY',
            'desc' =>'The government they survive artical of fortune',
            'image' =>'images/slider/slide-1.jpg',
            'btn_text' =>'CONTACT US',
            'btn_url' =>'https://www.facebook.com',
            ],
            [
            'title_1' =>'We IMPROVE YOUR',
            'title_2' =>'SALES EFFICIENCY',
            'desc' =>'The government they survive artical of fortune',
            'image' =>'images/slider/slide-2.jpg',
            'btn_text' =>'CONTACT US',
            'btn_url' =>'https://www.facebook.com',
            ],
            [
            'title_1' =>'We IMPROVE YOUR',
            'title_2' =>'SALES EFFICIENCY',
            'desc' =>'The government they survive artical of fortune',
            'image' =>'images/slider/slide-3.jpg',
            'btn_text' =>'CONTACT US',
            'btn_url' =>'https://www.facebook.com',
            ],
            [
            'title_1' =>'We IMPROVE YOUR',
            'title_2' =>'SALES EFFICIENCY',
            'desc' =>'The government they survive artical of fortune',
            'image' =>'images/slider/slide-5.jpg',
            'btn_text' =>'CONTACT US',
            'btn_url' =>'https://www.facebook.com',
            ]
        ]);
    }
}
