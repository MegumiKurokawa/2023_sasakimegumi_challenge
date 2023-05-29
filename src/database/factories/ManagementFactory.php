<?php

namespace Database\Factories;

use App\Models\Management;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManagementFactory extends Factory
{
    protected $model = Management::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['男性', '女性']),
            'email' => $this->faker->email(),
            'opinion' => $this->faker->realText(120)
        ];
    }
}
