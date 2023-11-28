<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamQuestionList>
 */
class ExamQuestionListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'exam_id' => $this->faker->numberBetween(1, 10),
            'question_id' => $this->faker->numberBetween(1, 10),
            'isTrue' => $this->faker->boolean(),
        ];
    }
}
