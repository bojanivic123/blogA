<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
             'first_name' => fake()->firstName(),
             'last_name' => fake()->lastName(),
             'email' => fake()->email()
        ]);

        PostsSeeder::run();
        CommentsSeeder::run(); 
    }
}
