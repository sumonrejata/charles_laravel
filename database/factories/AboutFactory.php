<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\About;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = About::class;
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->address(),
            //'image'=>'https://source.unsplash.com/random',
        ];
    }
}
