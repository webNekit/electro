<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Иванов Алексей',
                'position' => 'Генеральный директор',
                'image' => null,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Петрова Мария',
                'position' => 'Менеджер проектов',
                'image' => null,
                'is_active' => true,
                'is_featured' => true,
            ],

            // Обычные активные сотрудники (не избранные)
            [
                'name' => 'Сидоров Дмитрий',
                'position' => 'Разработчик',
                'image' => null,
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Кузнецова Анна',
                'position' => 'Дизайнер',
                'image' => null, // Без фото (будет заглушка)
                'is_active' => true,
                'is_featured' => false,
            ],

            // Неактивные сотрудники (не будут отображаться)
            [
                'name' => 'Бывший Сотрудник',
                'position' => 'Уволен',
                'image' => null,
                'is_active' => false,
                'is_featured' => false,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
