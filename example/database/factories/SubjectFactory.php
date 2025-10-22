<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;

class SubjectFactory extends Factory
{
    public function definition(): array
{
    return [
        'name' => $this->faker->unique()->randomElement([
            'Matematika', 'Fizika', 'Tarix', 'Informatika', 'Biologiya', 'Kimyo'
        ]),
    ];
}

    public function configure()
    {
        return $this->afterCreating(function ($subject) {
            // Har bir fan uchun 2 ta random teacher biriktiramiz
            $teachers = Teacher::inRandomOrder()->take(2)->pluck('id');
            $subject->teachers()->attach($teachers);
        });
    }
}
