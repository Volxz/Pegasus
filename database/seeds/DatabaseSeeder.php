<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $index) {
            App\Post::create([
                'type' => 'text',
                'author' => 0,
                'title' => $faker->name,
                'content' => $faker->text,
            ]);
        }
    }
}