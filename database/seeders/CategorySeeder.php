<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Du lịch',
            'description' => 'Tin tức về du lịch',
        ]);

        Category::create([
            'name' => 'Ẩm thực',
            'description' => 'Tin tức về ẩm thực',
        ]);

        Category::create([
            'name' => 'Thể thao',
            'description' => 'Tin tức về thể thao',
        ]);
    }
}
