<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::insert([
            [
                'name' => 'Md.Tanjim Ahamed',
                'desig' => 'CEO',
                'desc' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family',
            ],
            [
                'name' => 'Md.Milton Khan',
                'desig' => 'Hardware',
                'desc' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family',
            ],
            [
                'name' => 'Md.Rakibul Alom',
                'desig' => 'Software Eng',
                'desc' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family',
            ],
            [
                'name' => 'Md.Emon Khan',
                'desig' => 'Laravel',
                'desc' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family',
            ],
            [
                'name' => 'Md.Somrat',
                'desig' => 'Hardware',
                'desc' => 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family',
            ],
        ]);
    }
}
