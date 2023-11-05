<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lead_type' => 'agent_based',
            'status' => 'pending',
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'address_1' => $this->faker->streetAddress(),
            'address_2' => $this->faker->address(),
            'postal_code' => $this->faker->postcode(),
            'contact_number_1' => $this->faker->randomDigitNotZero(),
            'contact_number_2' => $this->faker->randomDigitNotZero(),
            'email_address' => $this->faker->email(),
            'date_of_birth' => $this->faker->date(),
            'password' => bcrypt($this->faker->password()),
        ];
//        $leads = LeadFactory::count(10)->create();
    }
}
