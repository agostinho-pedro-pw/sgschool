<?php

namespace Database\Factories;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->optional()->firstName(),
            'last_name' => fake()->lastName(),
            'nif' => fake()->unique()->numerify('##########'),
            'date_of_birth' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'course' => fake()->randomElement(array_keys(Enrollment::COURSES)),
            'identity_card_path' => null,
            'secondary_certificate_path' => null,
            'application_date' => fake()->date(),
            'status' => 'pending',
        ];
    }
}
