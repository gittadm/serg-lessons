<?php

namespace Database\Seeders;

use App\Models\Question;
use Faker\Factory;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1 способ
        $questions = [];

        // faker
        $faker = Factory::create();

        $now = now();

        $count = 5;
        foreach (range(1, $count + 1) as $index) {
            $questions[] = [
                'name' => $faker->name,
                'description' => $faker->sentence,
                'is_quick' => $faker->boolean,
                'email' => $faker->email,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            //$questions[] = $question;
            //Question::forceCreate($question);
        }

        Question::insert($questions);
    }
}
