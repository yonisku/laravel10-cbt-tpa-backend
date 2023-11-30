<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => $this->faker->text(),
            'category' => $this->faker->randomElement(['Numeric', 'Verbal', 'Logical']),
            'answer_a' => $this->faker->word(),
            'answer_b' => $this->faker->word(),
            'answer_c' => $this->faker->word(),
            'answer_d' => $this->faker->word(),
            'answer_key' => $this->faker->randomElement(['a', 'b', 'c', 'd']),
        ];
    }
}
