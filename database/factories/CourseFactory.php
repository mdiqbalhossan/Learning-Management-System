<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(3);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'category_id' => Category::all()->random()->id,
            'level' => $this->faker->randomElement(['BEGINNER', 'INTERMEDIATE', 'ADVANCED']),
            'details' => $this->faker->text,
            'short_description' => $this->faker->text(200),
            'is_popular' => $this->faker->boolean,
            'source' => $this->faker->randomElement(['YOUTUBE', 'VIMEO', 'OTHER']),
            'source_url' => $this->faker->url,
            'is_free' => $this->faker->boolean,
            'default_price' => $this->faker->randomFloat(2, 0, 100),
            'current_price' => $this->faker->randomFloat(2, 0, 100),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean,
        ];
    }
}
