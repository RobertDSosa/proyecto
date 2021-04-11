<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => "Publicaciones",
            'slug' => "publicaciones"
        ]);
        Category::create([
            'name' => "Videos",
            'slug' => "videos"
        ]);
        Category::create([
            'name' => "Podcasts",
            'slug' => "podcasts"
        ]);
        Category::create([
            'name' => "Recursos",
            'slug' => "recursos"
        ]);
    }
}
