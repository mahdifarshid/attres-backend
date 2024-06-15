<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Ensure user_id is provided
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
