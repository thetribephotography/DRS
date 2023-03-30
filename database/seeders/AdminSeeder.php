<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'name' => 'DahntheBadGuy',
            'email' => 'admin2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('admin');

        User::create([
            'id' => '2',
            'name' => 'DanielTheUser',
            'email' => 'admin1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('registered');

        User::create([
            'id' => '2',
            'name' => 'David',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('registered');
    }
}
