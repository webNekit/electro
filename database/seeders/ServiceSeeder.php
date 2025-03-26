<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Электромонтажные работы',
                'description' => 'Полный комплекс электромонтажных работ любой сложности для квартир, домов и коммерческих помещений.',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Замена электропроводки',
                'description' => 'Безопасная замена старой проводки с использованием современных материалов и технологий.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Установка электрощитов',
                'description' => 'Профессиональный монтаж и сборка электрощитового оборудования с гарантией качества.',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Ремонт электрооборудования',
                'description' => 'Диагностика и ремонт бытового и промышленного электрооборудования.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Монтаж освещения',
                'description' => 'Установка внутреннего и наружного освещения, включая дизайнерские решения.',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Прокладка кабельных линий',
                'description' => 'Прокладка силовых и слаботочных кабелей с соблюдением всех норм безопасности.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Установка розеток и выключателей',
                'description' => 'Аккуратный монтаж розеток и выключателей с учетом дизайна помещения.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Автоматизация электроснабжения',
                'description' => 'Внедрение умных систем управления электроснабжением для дома и бизнеса.',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Аварийные электромонтажные работы',
                'description' => 'Срочное устранение неисправностей в электросетях круглосуточно.',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Консультация электрика',
                'description' => 'Профессиональные консультации по вопросам электроснабжения и энергосбережения.',
                'is_active' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
