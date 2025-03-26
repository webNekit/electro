<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $companyName = 'АО «ГК «Электрощит» - ТМ Самара»';

    public function run()
    {
        $categories = BlogCategory::all();

        $posts = [
            // Популярные статьи (3)
            [
                'name' => 'Новые технологии в производстве трансформаторов',
                'small_text' => 'Как мы модернизировали производственную линию для повышения надежности оборудования',
                'is_popular' => true,
                'is_banner' => true,
                'category' => 'Энергетическое оборудование'
            ],
            [
                'name' => 'Строительство подстанции 220 кВ в Самарской области',
                'small_text' => 'Подробный отчет о ключевом инфраструктурном проекте этого года',
                'is_popular' => true,
                'category' => 'Проекты подстанций'
            ],
            [
                'name' => 'Импортозамещение в энергетике: наши решения',
                'small_text' => 'Как мы обеспечиваем технологический суверенитет в электротехнической отрасли',
                'is_popular' => true,
                'category' => 'Инновационные технологии'
            ],

            // Остальные статьи (12)
            [
                'name' => 'Повышение надежности энергосистем: кейс ' . $this->companyName,
                'small_text' => 'Реальные примеры увеличения межремонтного интервала оборудования',
                'category' => 'Энергобезопасность'
            ],
            [
                'name' => 'Экспорт наших решений в страны ЕАЭС',
                'small_text' => 'Как российское оборудование завоевывает международные рынки',
                'category' => 'Истории успеха'
            ],
            // ... добавьте остальные 10 статей по аналогии
        ];

        foreach ($posts as $post) {
            $category = $categories->firstWhere('name', $post['category']);

            Blog::create([
                'blog_category_id' => $category->id,
                'name' => $post['name'],
                'small_text' => $post['small_text'],
                'long_text' => $this->generateEnergyText($post['name']),
                'image' => null,
                'is_active' => true,
                'is_popular' => $post['is_popular'] ?? false,
                'is_banner' => $post['is_banner'] ?? false,
            ]);
        }
    }

    protected function generateEnergyText(string $title): string
    {
        $phrases = [
            "{$this->companyName} продолжает курс на технологическое лидерство",
            "Внедрение современных стандартов качества позволило значительно повысить надежность",
            "Проект реализован с использованием отечественных комплектующих",
            "Энергобезопасность остается ключевым приоритетом компании",
            "Новые производственные мощности позволяют увеличить выпуск продукции на 25%",
            "Собственные разработки защищены патентами РФ",
            "Оборудование соответствует международным стандартам IEC"
        ];

        shuffle($phrases);

        return "<h3>{$title}</h3>"
            . "<p>{$this->companyName} " . $phrases[0] . ".</p>"
            . "<p>" . $phrases[1] . ", что подтверждено испытаниями.</p>"
            . "<ul><li>" . implode("</li><li>", array_slice($phrases, 2, 3)) . "</li></ul>"
            . "<p>Это направление остается стратегически важным для укрепления энергонезависимости страны.</p>";
    }
}
