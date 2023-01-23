<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FreeConsulatation;
use Illuminate\Support\Carbon;
use DB;

class FreeConsulatationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FreeConsulatation::insert([
            [
            'name' =>'Md.Tanjim Ahamed',
            'phone' =>'01537472075',
            'email' =>'tanjimahamed@gmail.com',
            'message' =>'Hi I am a Tanjim Ahamed, I need your help',
            ],
            [
            'name' =>'Md.Milton Khan',
            'phone' =>'0153700000',
            'email' =>'miltonkhan@gmail.com',
            'message' =>'Hi I am a Milton Khan, I need your help',
            ]
        ]);
    }
}
