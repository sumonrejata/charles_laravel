<?php

namespace Database\Factories;

use App\Models\Sumon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SumonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Sumon::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->address(),
        ];
    }
}
