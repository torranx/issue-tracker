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
            'title' => fake()->words(mt_rand(3, 5), true),
            'description' => fake()->paragraph(2),
            'author_user_id' => User::all()->random()->id,
            'assigned_user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
            'status' => 'to do'
        ];
    }
}
