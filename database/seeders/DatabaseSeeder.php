<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Database\Seeders\FeaturesSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\AboutSubSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\OurTeamSeeder;
use Database\Seeders\CounterSeeder;
use Database\Seeders\OurPartnerSeeder;
use Database\Seeders\FreeConsulatationSeeder;
use Database\Seeders\HeaderLogoSeeder;
use Database\Seeders\HeaderAddressSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\TagSeeder;
use Database\Seeders\MenuHeaderSeeder;
use Database\Seeders\PortfolioSeeder;
use Database\Seeders\HeaderIconSeeder;
use Database\Seeders\FooterMenuSeeder;
use Database\Seeders\factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Sumon::factory(10)->create();
        //\App\Models\About::factory(5)->create();
        //App\Models\Service::factory(10)->create();
        $this->call([
            UsersSeeder::class,
            FeaturesSeeder::class,
            AboutSeeder::class,
            AboutSubSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            OurTeamSeeder::class,
            CounterSeeder::class,
            OurPartnerSeeder::class,
            FreeConsulatationSeeder::class,
            HeaderLogoSeeder::class,
            HeaderAddressSeeder::class,
            SliderSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            MenuHeaderSeeder::class,
            PortfolioSeeder::class,
            HeaderIconSeeder::class,
            FooterMenuSeeder::class,
        ]);
        
    }
}
