<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Management;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'management_id' => $this->faker->numberBetween(1, 35),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building' => $this->faker->address(),
        ];
    }
}
