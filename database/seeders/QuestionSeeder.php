<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'question' => 'Как обеспечивается безопасность детей в детском саду?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
            [
                'question' => 'Что входит в образовательную программу?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
            [
                'question' => 'Какие развивающие мероприятия проводятся?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
            [
                'question' => 'Обратная связь с воспитателем и управлением сада?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
            [
                'question' => 'Какие средства гигиены и ухода в детском саду?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
            [
                'question' => 'Есть ли отчеты об успеваемости ребенка?',
                'answer' => 'Безопасность детей очень важна для нас. ',
            ],
        ];

        foreach ($data as $question) {
            Question::create($question);
        }
    }
}
