<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Workflows',
        ]);

        Tag::create([
            'name' => 'CSS',
        ]);

        Tag::create([
            'name' => 'OOP',
        ]);

        Tag::create([
            'name' => 'Formal methods',
        ]);

        Tag::create([
            'name' => 'Python-project',
        ]);
        Tag::create([
            'name' => 'Design',
        ]);
        Tag::create([
            'name' => 'Open-source',
        ]);
    }
}
