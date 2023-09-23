<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Forte Consulting Group, Inc',
            'address' => '222 S. Riverside Plz. Ste 2800',
            'city' => '60606 Chicago',
            'country' => 'Stany Zjednoczone Ameryki',
            'email' => '',
            'phone' => '',
            'tax_number' => 'US 36-4392970',
        ];
    }
}
