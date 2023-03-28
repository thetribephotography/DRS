<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

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
            'name' => 'Workflows',
            'slug' => Str::slug('Worflows'),
        ]);

        Tag::create([
            'name' => 'CSS',
            'slug' => Str::slug('CSS'),
        ]);

        Tag::create([
            'name' => 'OOP',
            'slug' => Str::slug('OOP'),
        ]);

        Tag::create([
            'name' => 'Formal methods',
            'slug' => Str::slug('Formal methods'),
        ]);

        Tag::create([
            'name' => 'Python-project',
            'slug' => Str::slug('Python-project'),
        ]);
        Tag::create([
            'name' => 'Design',
            'slug' => Str::slug('Design'),
        ]);
        Tag::create([
            'name' => 'Open-source',
            'slug' => Str::slug('Open-source'),
        ]);
    }
}
