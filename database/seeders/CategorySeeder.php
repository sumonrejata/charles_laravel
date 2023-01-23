<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'title' =>'Laravel',
                'slug' =>'laravel',
            ],
            [
                'title' =>'Wordpress',
                'slug' =>'wordpress',
            ],
            [
                'title' =>'PHP',
                'slug' =>'php',
            ],
            [
                'title' =>'News',
                'slug' =>'news',
            ],
            [
                'title' =>'Books',
                'slug' =>'books',
            ],
        ]);
    }
}
