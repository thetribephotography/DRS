<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //

        //Seed all test Categories
        Category::create([
            'name' => 'Software Development',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Software Security',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Software Evolution and Maintenance',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Software Design Patterns',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Development Methodologies',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Software Project Management',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Open Source Development',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => 'Software Business',
            'description' => "This is for this",
        ]);
        Category::create([
            'name' => ' Agile Software Development',
            'description' => "This is for this",
        ]);
    }
}
