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
        // For others
        Tag::create([
            'name' => 'Blockchain Technology',
            'slug' => Str::slug('Blockchain Technology'),
        ]);
        Tag::create([
            'name' => 'Quiz',
            'slug' => Str::slug('quiz'),
        ]);
        Tag::create([
            'name' => 'Challenge',
            'slug' => Str::slug('Challenge'),
        ]);
        Tag::create([
            'name' => 'Discussions',
            'slug' => Str::slug('Discussions'),
        ]);
        Tag::create([
            'name' => 'Machine Learning',
            'slug' => Str::slug('Machine Learning'),
        ]);
        Tag::create([
            'name' => 'Augmented Reality',
            'slug' => Str::slug('Augmented Reality'),
        ]);
        Tag::create([
            'name' => 'Virtual Reality',
            'slug' => Str::slug('Virtual Reality'),
        ]);
        Tag::create([
            'name' => 'Cloud Computing',
            'slug' => Str::slug('Cloud Computing'),
        ]);
        Tag::create([
            'name' => 'Internet of things',
            'slug' => Str::slug('Internet of things'),
        ]);
        Tag::create([
            'name' => 'Artificial Intelligence',
            'slug' => Str::slug('Artificial Intelligence'),
        ]);
        //For Software Architcture
        Tag::create([
            'name' => 'Workflows',
            'slug' => Str::slug('Worflows'),
        ]);

        //For Quality Assurance
        Tag::create([
            'name' => 'Quality Control',
            'slug' => Str::slug('Quality Control'),
        ]);
        Tag::create([
            'name' => 'Test Planning',
            'slug' => Str::slug('Test Planning'),
        ]);
        Tag::create([
            'name' => 'Test Reporting',
            'slug' => Str::slug('Test Reporting'),
        ]);
        Tag::create([
            'name' => 'Test Automation',
            'slug' => Str::slug('Test Automation'),
        ]);

        //For Formal Methods
        Tag::create([
            'name' => 'Formal Verfication',
            'slug' => Str::slug('Formal Verfication'),
        ]);
        Tag::create([
            'name' => 'Model Checking',
            'slug' => Str::slug('Model Checking'),
        ]);

        ///For Software Security

        Tag::create([
            'name' => 'Testing',
            'slug' => Str::slug('Testing'),
        ]);
        Tag::create([
            'name' => 'Ethical Hacking',
            'slug' => Str::slug('Ethical Hacking'),
        ]);

        //For Software Ethics
        Tag::create([
            'name' => 'Data Privacy',
            'slug' => Str::slug('Data Privacy'),
        ]);

        Tag::create([
            'name' => 'Data Protection',
            'slug' => Str::slug('Data Protection'),
        ]);

        Tag::create([
            'name' => 'Intellectual Property',
            'slug' => Str::slug('Intellectual Property'),
        ]);

        //For Software Architecture
        Tag::create([
            'name' => 'Design Patterns',
            'slug' => Str::slug('Design Patterns'),
        ]);
        Tag::create([
            'name' => 'Architectural styles',
            'slug' => Str::slug('Architectural styles'),
        ]);
        Tag::create([
            'name' => 'Cloud Computing Architecture',
            'slug' => Str::slug('Cloud Computing Architecture'),
        ]);

        Tag::create([
            'name' => 'Defects',
            'slug' => Str::slug('Defects'),
        ]);
    }
}
