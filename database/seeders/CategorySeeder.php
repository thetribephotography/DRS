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
            'name' => 'Software Architecture',
            'description' => "This is for this",
            'slug' => Str::slug('Software Architecture'),
        ]);
        Category::create([
            'name' => 'Software Security',
            'description' => "This is for this",
            'slug' => Str::slug('Software Security'),
        ]);
        Category::create([
            'name' => 'Software Evolution',
            'description' => "This is for this",
            'slug' => Str::slug('Software Evolution'),
        ]);
        Category::create([
            'name' => 'Software Maintenance',
            'description' => "This is for this",
            'slug' => Str::slug('Software Maintenance'),
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


        Category::create([
            'name' => 'Software Quality Assurance',
            'description' => "This is for this",
            'slug' => Str::slug('Software Quality Assurance'),
        ]);
        Category::create([
            'name' => 'Formal Methods',
            'description' => "This is for this",
            'slug' => Str::slug('Formal Methods'),
        ]);
        Category::create([
            'name' => 'Software Ethics',
            'description' => "This is for this",
            'slug' => Str::slug('Software Ethics'),
        ]);
        Category::create([
            'name' => 'Software Measurement and Metrics',
            'description' => "This is for this",
            'slug' => Str::slug('Software Measurement and metrics'),
        ]);
        Category::create([
            'name' => 'Emerging Technologies',
            'description' => "This is for this",
            'slug' => Str::slug('Emerging Technologies'),
        ]);
        Category::create([
            'name' => 'Software Testing',
            'description' => "This is for this",
            'slug' => Str::slug('Software Testing'),
        ]);
        Category::create([
            'name' => 'Software Licensing',
            'description' => "This is for this",
            'slug' => Str::slug('Software Licensing'),
        ]);
    }
}
