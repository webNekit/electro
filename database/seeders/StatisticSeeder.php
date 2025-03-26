<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statistics = [
            [
                'title' => 'Довольных клиентов',
                'count' => 1250,
            ],
            [
                'title' => 'Завершенных проектов',
                'count' => 890,
            ],
            [
                'title' => 'Наград получено',
                'count' => 45,
            ],
            [
                'title' => 'Лет на рынке',
                'count' => 12,
            ],
        ];

        foreach ($statistics as $statistic) {
            Statistic::create($statistic);
        }
    }
}
