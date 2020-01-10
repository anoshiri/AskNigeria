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
        factory(App\User::class, rand(3,10))->create()->each(function($user) {
            $user->questions()->saveMany(
                factory(App\Question::class, rand(0,5))->make()
            );
        });
    }
}
