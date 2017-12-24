<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Resets the User table
        DB::table('tasks')->truncate();

        // Generate 10 Dummy posts data
        $posts = [];
        $faker = Factory::create();
        $date = Carbon::create(2017, 3, 24, 9);

        for($i = 1; $i <= 10; $i ++){

            $date->addDays(1);
            $createdDate    = clone($date);

            $posts [] = [
                'title'         => $faker->sentence(),
                'body'          => $faker->paragraphs(rand(10, 15), true),
                'points'        => random_int(0, 10),
                'created_at'    => $createdDate,
                'updated_at'    => $createdDate,
            ];
        }
        DB::table('tasks')->insert($posts);
    }
}
