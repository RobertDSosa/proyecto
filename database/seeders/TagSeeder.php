<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => "Anuncios",
            'slug' => "anuncios",
            'color' => "blue",
        ]);
        Tag::create([
            'name' => "Discipulado",
            'slug' => "discipulado",
            'color' => "red",
        ]);
        Tag::create([
            'name' => "Podcast",
            'slug' => "podcast",
            'color' => "indigo",
        ]);
        Tag::create([
            'name' => "Consolidación",
            'slug' => "consolidacion",
            'color' => "yellow",
        ]);
        Tag::create([
            'name' => "Campaña",
            'slug' => "campana",
            'color' => "green",
        ]);
        Tag::create([
            'name' => "Plan felipe",
            'slug' => "plan-felipe",
            'color' => "blue",
        ]);
        Tag::create([
            'name' => "Evangelismo",
            'slug' => "evangelismo",
            'color' => "red",
        ]);
        Tag::create([
            'name' => "Ministerio",
            'slug' => "ministerio",
            'color' => "green",
        ]);
    }
}
