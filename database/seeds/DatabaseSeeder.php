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
        DB::table('categories')->insert([
            'name' => 'Health'
        ]);

        DB::table('categories')->insert([
            'name' => 'Social'
        ]);

        DB::table('categories')->insert([
            'name' => 'Fitness'
        ]);

        DB::table('categories')->insert([
            'name' => 'Productivity'
        ]);

        DB::table('categories')->insert([
            'name' => 'Personal'
        ]);

        DB::table('tasks')->insert([
            'name' => 'Jog for an hour',
            'category_id' => 3,
            'points' => 1000
        ]);

        DB::table('tasks')->insert([
            'name' => 'Go out for 30 min walk',
            'category_id' => 3,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Take the stairs instead of the elevator',
            'category_id' => 3,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Smile more',
            'category_id' => 2,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Call an old friend or relative',
            'category_id' => 2,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Drink at least 6 glasses of water',
            'category_id' => 1,
            'points' => 700
        ]);

        DB::table('tasks')->insert([
            'name' => 'Drink 3 cups of green tea',
            'category_id' => 3,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Hug and say "I love you" to your spouse/partner',
            'category_id' => 2,
            'points' => 700
        ]);

        DB::table('tasks')->insert([
            'name' => 'Avoid cursing',
            'category_id' => 2,
            'points' => 1000
        ]);

        DB::table('tasks')->insert([
            'name' => 'If you sit at work, stand up every 30 min and stretch',
            'category_id' => 3,
            'points' => 600
        ]);

        DB::table('tasks')->insert([
            'name' => 'Park in the furthest parking spot',
            'category_id' => 3,
            'points' => 500
        ]);

        DB::table('tasks')->insert([
            'name' => 'Avoid eating snacks',
            'category_id' => 1,
            'points' => 700
        ]);

        DB::table('tasks')->insert([
            'name' => 'Meditate for 30 min',
            'category_id' => 5,
            'points' => 600
        ]);

        DB::table('tasks')->insert([
            'name' => 'Read a few pages of your favorite book',
            'category_id' => 5,
            'points' => 700
        ]);

        DB::table('tasks')->insert([
            'name' => 'Arrive early to work',
            'category_id' => 5,
            'points' => 600
        ]);

        DB::table('tasks')->insert([
            'name' => 'Replace a meal with salad',
            'category_id' => 1,
            'points' => 600
        ]);

        DB::table('tasks')->insert([
            'name' => 'Sleep at least 8 hours',
            'category_id' => 3,
            'points' => 1000
        ]);

        $user = factory(App\User::class, 50)->create();

        $user->each(function ($user) {
            $tracker = factory(App\TaskTracker::class, rand(10, 50))->create(['user_id' => $user->id]);

            $totalPoints = 0;

            $tracker->each(function($tracker) use(&$totalPoints) {
                $totalPoints += App\Task::find($tracker->task_id)->points;
            });
           
            DB::table('points')->insert([
                'user_id' => $user->id,
                'daily' => 0,
                'total' => $totalPoints
            ]);
        });
     
    }
}
