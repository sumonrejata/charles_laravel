<?php

namespace Database\Factories;

use App\Models\Featurs;
use Illuminate\Database\Eloquent\Factories\Factory;

class TanjimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Featurs::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->address(),
        ];
    }
}
