<?php

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
        $this->call(NewsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(LikesSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
