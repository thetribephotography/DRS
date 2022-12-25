<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Eloquent::unguard();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'registered']);
        Role::create(['name' => 'visitor']);
        Role::create(['name' => 'superadmin']);
    }
}
