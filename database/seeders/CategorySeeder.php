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
        collect([
            'Makanan',
            'Minuman',
            'Peralatan Masak',
            'Kopi',
            'Teh',
            'Camilan',
            'Permen',
            'Roti',
            'Kue',
            'Sarapan',
        ])->each(fn($category) => Category::query()->create(['name' => $category]));
    }
}
