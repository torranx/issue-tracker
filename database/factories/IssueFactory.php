<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->paragraph(2),
            'author_user_id' => User::factory(),
            'assigned_user_id' => User::factory(),
            'project_id' => Project::factory(),
            'status' => 'to do'
        ];
    }
}
