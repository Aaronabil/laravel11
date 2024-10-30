<?php

namespace Database\Seeders;

use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        Category::create([
            'name' => 'Work out',
            'slug' => 'wo',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Healthiest',
            'slug' => 'sehat',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'dg',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Kacau',
            'slug' => 'kicau',
            'color' => 'purple'
        ]);

        Category::create([
            'name' => 'Miaw',
            'slug' => 'wadaw',
            'color' => 'yellow'
        ]);
    }
}
