<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed all test Categories
        Category::create([
            'name' => 'Software Development',
            'description' => "This is for this",
            'slug' => Str::slug('Software Development'),
        ]);
        Category::create([
            'name' => 'Software Security',
            'description' => "This is for this",
            'slug' => Str::slug('Software Security'),
        ]);
        Category::create([
            'name' => 'Software Evolution and Maintenance',
            'description' => "This is for this",
            'slug' => Str::slug('Software Evolution and Maintenance'),
        ]);
        Category::create([
            'name' => 'Software Design Patterns',
            'description' => "This is for this",
            'slug' => Str::slug('Software Design Patterns'),
        ]);
        Category::create([
            'name' => 'Development Methodologies',
            'description' => "This is for this",
            'slug' => Str::slug('Development Methodologies'),
        ]);
        Category::create([
            'name' => 'Software Project Management',
            'description' => "This is for this",
            'slug' => Str::slug('Software Project Management'),
        ]);
        Category::create([
            'name' => 'Open Source Development',
            'description' => "This is for this",
            'slug' => Str::slug('Open Source Development'),
        ]);
        Category::create([
            'name' => 'Software Business',
            'description' => "This is for this",
            'slug' => Str::slug('Software Business'),
        ]);
        Category::create([
            'name' => 'Agile Software Development',
            'description' => "This is for this",
            'slug' => Str::slug('Agile Software Development'),
        ]);
    }
}
