<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurTeam;
use DB;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurTeam::insert([
           [
            'name' =>'Md.Tanjim Ahamed',
            'desig' =>'CEO',
            'desc' =>'The government they survive as soldiers of fortune',
            'image' =>'images/team/1.jpg',
            'social_icon' =>'facebook',
            'social_link' =>'https://www.facebook.com',
           ],
           [
            'name' =>'Md.Milton',
            'desig' =>'Hardware',
            'desc' =>'The government they survive as soldiers of fortune',
            'image' =>'images/team/2.jpg',
            'social_icon' =>'twitter',
            'social_link' =>'https://www.twitter.com',
           ],
           [
            'name' =>'Md.Simul',
            'desig' =>'Hardware',
            'desc' =>'The government they survive as soldiers of fortune',
            'image' =>'images/team/3.jpg',
            'social_icon' =>'pinterest',
            'social_link' =>'https://www.pinterest.com',
           ],
           [
            'name' =>'Liton khan',
            'desig' =>'Networking',
            'desc' =>'The government they survive as soldiers of fortune',
            'image' =>'images/team/4.jpg',
            'social_icon' =>'youtube',
            'social_link' =>'https://www.youtube.com',
           ]
 
        ]);
    }
}
