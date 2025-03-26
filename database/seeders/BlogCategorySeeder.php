<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Энергетическое оборудование', 'is_active' => true],
            ['name' => 'Инновационные технологии', 'is_active' => true],
            ['name' => 'Энергобезопасность', 'is_active' => true],
            ['name' => 'Проекты подстанций', 'is_active' => true],
            ['name' => 'Истории успеха', 'is_active' => true],
        ];

        foreach ($categories as $category) {
            BlogCategory::firstOrCreate(['name' => $category['name']], $category);
        }
    }
}
