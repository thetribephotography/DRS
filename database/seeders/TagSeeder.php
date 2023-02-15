<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::create([
            'name' => 'HTML',
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
    }
}
