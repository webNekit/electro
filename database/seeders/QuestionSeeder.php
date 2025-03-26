<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'Как долго обрабатываются заказы?',
                'answer' => 'Обычная обработка заказа занимает от 1 до 3 рабочих дней.',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'question' => 'Какие способы оплаты вы принимаете?',
                'answer' => 'Мы принимаем Visa, Mastercard, МИР, а также переводы через СБП.',
                'is_active' => true,
                'is_featured' => true,
            ],

            // Обычные активные вопросы (не избранные)
            [
                'question' => 'Есть ли у вас бесплатная доставка?',
                'answer' => 'Да, при заказе от 5000 рублей доставка бесплатная.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'question' => 'Можно ли вернуть товар?',
                'answer' => 'Да, в течение 14 дней с момента получения заказа.',
                'is_active' => true,
                'is_featured' => false,
            ],

            // Неактивные вопросы (не будут отображаться)
            [
                'question' => 'Старая акция (не активна)',
                'answer' => 'Этот вопрос больше не актуален.',
                'is_active' => false,
                'is_featured' => false,
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
