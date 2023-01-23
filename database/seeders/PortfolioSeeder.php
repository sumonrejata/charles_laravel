<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::insert([
           [
            'title' =>'Business Meeting',
            'desc' =>'Explore strange new worlds',
            'image' =>'images/portfolio/1.jpg',
           ],
           [
            'title' =>'Graphich Meeting',
            'desc' =>'What is Lorem Ipsum',
            'image' =>'images/portfolio/2.jpg',
           ],
           [
            'title' =>'Hardware Meeting',
            'desc' =>'Why do we use it?',
            'image' =>'images/portfolio/3.jpg',
           ],
           [
            'title' =>'Computer Meeting',
            'desc' =>'Where does it come',
            'image' =>'images/portfolio/4.jpg',
           ],
           [
            'title' =>'Transport Meeting',
            'desc' =>'Why do we use it?',
            'image' =>'images/portfolio/5.jpg',
           ],
           [
            'title' =>'Technologey Meeting',
            'desc' =>'Contrary to popular',
            'image' =>'images/portfolio/6.jpg',
           ],
           [
            'title' =>'Garments Meeting',
            'desc' =>' Lorem Ipsum is',
            'image' =>'images/portfolio/7.jpg',
           ],
           [
            'title' =>'Vehicle Meeting',
            'desc' =>'Why do we use it?',
            'image' =>'images/portfolio/8.jpg',
           ],
           [
            'title' =>'Sales Meeting',
            'desc' =>' Lorem Ipsum is',
            'image' =>'images/portfolio/9.jpg',
           ],
        ]);
    }
}
