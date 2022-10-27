<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition()
    {
        return [
            'firstname'         => $this->faker->firstName,
            'lastname'          => $this->faker->lastName,
            'phone'             => $this->faker->e164PhoneNumber,
            'email'             => $this->faker->email,
        ];
    }
}
