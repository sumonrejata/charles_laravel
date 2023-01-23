<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'name' =>'Bangla Book',
            ],
            [
                'name' =>'English Book',
            ],
            [
                'name' =>'Laravel',
            ],
            [
                'name' =>'Bangla News',
            ],
            [
                'name' =>'Englisg News',
            ]
        ]);
    }
}
