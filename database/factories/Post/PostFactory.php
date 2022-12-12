<?php

namespace Database\Factories\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => mt_rand(1, 6),
            'category_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(mt_rand(5, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'image' => 'img/Blog/error.PNG',
            'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10)) ) . '</p>'
        ];
    }
}
