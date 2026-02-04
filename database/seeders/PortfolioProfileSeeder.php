<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\LanguageSkill;
use App\Models\BarSkill;
use App\Models\ChecklistItem;

class PortfolioProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::query()->delete();
        LanguageSkill::query()->delete();
        BarSkill::query()->delete();
        ChecklistItem::query()->delete();

        Profile::query()->create([
            'name' => 'Said HAMMANE',
            'title_primary' => 'BI / Data Analyst',
            'title_secondary' => 'Power BI - SQL - Excel',
            'summary' => null,
            'residence' => 'Morocco',
            'city' => 'CASABLANCA',
            'age' => '24',
        ]);

        LanguageSkill::query()->insert([
            ['label' => 'Arabic', 'percent' => 100, 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'French', 'percent' => 85, 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'English', 'percent' => 85, 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        BarSkill::query()->insert([
            ['label' => 'Power BI', 'percent' => 90, 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'SQL (T-SQL)', 'percent' => 88, 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Excel - Power Query', 'percent' => 86, 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Data Modeling', 'percent' => 82, 'sort_order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'KPI Reporting', 'percent' => 90, 'sort_order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Web Dev (React/Node)', 'percent' => 70, 'sort_order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'ERPs (SAP)', 'percent' => 65, 'sort_order' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Databases (MySQL/PG)', 'percent' => 75, 'sort_order' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);

        ChecklistItem::query()->insert([
            ['text' => 'Power BI (DAX - modeling)', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'SQL (T-SQL) reporting', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'Excel (Power Query)', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'Reporting automation', 'sort_order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'SAP / ERP support', 'sort_order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'Web dashboards (React)', 'sort_order' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['text' => 'Git knowledge', 'sort_order' => 7, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
