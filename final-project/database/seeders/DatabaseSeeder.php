<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert([
        'id' => 1,
        'email' => 'admin@example.com',
        'password' => bcrypt('admin'),
    ]);


        $quiz = Quiz::create([
            'name' => 'F1 Quiz',
            'picture' => 'https://www.formula1.com/content/dam/fom-website/manual/Misc/Quiz/2020/002-question-mark-season-start.jpg',
            'description' => 'This is Quiz about greatest sport in the universe',
            'author_id' => 1,
        ]);

        $quiz->questions()->createMany([
            [
                'question' => 'Which driver is in that photo?',
                'picture' => 'https://content.api.news/v3/images/bin/3389edd6054cba3517b0c54a13d6b791',
                'firstAnswer' => 'George Russell',
                'secondAnswer' => 'Sebastian Vettel',
                'thirdAnswer' => 'Max Webber',
                'fourthAnswer' => 'Lewis Hamilton',
                'position' => 1,
                'correctAnswer' => 2,
            ],
            [
                'question' => 'Which driver is known as crashstappen?',
                'picture' => 'https://o.quizlet.com/CzyZbUsHIGiG0f1ptj62DQ_b.png',
                'firstAnswer' => 'Sergio Perez',
                'secondAnswer' => 'Kelly Piquet',
                'thirdAnswer' => 'Roscoe hamilton',
                'fourthAnswer' => 'Max Verstappen',
                'position' => 2,
                'correctAnswer' => 4,
            ],
        ]);
    }
}
