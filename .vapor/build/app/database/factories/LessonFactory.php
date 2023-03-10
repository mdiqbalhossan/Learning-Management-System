<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'section_id' => Section::all()->random()->id,
            'course_id' => Section::all()->random()->course_id,
            'provider' => 'youtube',
            'url' => 'https://www.youtube.com/watch?v=QH2-TGUlwu4',
            'duration' => rand(1, 100),
            'summary' => $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
