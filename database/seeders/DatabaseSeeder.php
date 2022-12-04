<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Issue;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::factory()->count(10)->create();

        $users = User::factory()->count(10)->create();

        $user = new User();
        $user->create([
            'name' => 'admin',
            'password' => Hash::make("test12345"),
            'email' => 'test@gmail.com',
        ]);

        foreach ($projects as $project) {
            $project->users()->attach(mt_rand(1, $project->max('id')));
        }

        $issues = Issue::factory()->count(10)->create();
    }
}
