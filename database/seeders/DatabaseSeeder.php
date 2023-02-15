<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Permission;
use Maklad\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(RegisteredSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
