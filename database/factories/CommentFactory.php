<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Ensure user_id is provided
            'article_id' => Article::factory(),
            'content' => $this->faker->paragraph,
        ];
    }
}
