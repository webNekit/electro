<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $advantages = [
            [
                'title' => '65 лет на рынке',
                'description' => 'Опыт работы с 1958 года в области производства электротехнического оборудования',
                'is_active' => true,
                'is_featured' => true
            ],
            [
                'title' => 'Полный цикл производства',
                'description' => 'Собственные конструкторские бюро, испытательные центры и современные производственные линии',
                'is_active' => true,
                'is_featured' => true
            ],
            [
                'title' => 'Импортозамещение',
                'description' => '100% отечественные разработки, независимость от иностранных поставщиков',
                'is_active' => true,
                'is_featured' => true
            ],
            [
                'title' => 'Собственные технологии',
                'description' => '150+ патентов на изобретения в области энергетического оборудования',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Комплексные решения',
                'description' => 'Проектирование, производство и монтаж "под ключ" для подстанций любого класса напряжения',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Соответствие стандартам',
                'description' => 'Продукция сертифицирована по ГОСТ, ТР ТС и международным стандартам IEC',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Экспортные поставки',
                'description' => 'Оборудование поставляется в 15 стран Евразийского экономического союза',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Модернизация мощностей',
                'description' => 'Ежегодные инвестиции в обновление производственного оборудования',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Квалифицированные кадры',
                'description' => '2500 сотрудников, включая 400 инженеров и конструкторов',
                'is_active' => true,
                'is_featured' => false
            ],
            [
                'title' => 'Экологичность',
                'description' => 'Внедрение "зеленых" технологий в производственные процессы',
                'is_active' => true,
                'is_featured' => false
            ]
        ];

        foreach ($advantages as $advantage) {
            Feature::create($advantage);
        }
    }
}
