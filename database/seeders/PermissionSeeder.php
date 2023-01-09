<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('maklad.permission.cache');

        Permission::firstOrCreate(['name' => 'create_post']);
        Permission::firstOrCreate(['name' => 'update_post']);
        Permission::firstOrCreate(['name' => 'group_post']);
        Permission::firstOrCreate(['name' => 'delete_all_post']);
        Permission::firstOrCreate(['name' => 'delete_user_post']);
        Permission::firstOrCreate(['name' => 'update_all_post']);
        Permission::firstOrCreate(['name' => 'update_user_post']);
        Permission::firstOrCreate(['name' => 'download_all_post']);
        Permission::firstOrCreate(['name' => 'download_group_post']);
        Permission::firstOrCreate(['name' => 'download_public_post']);
        Permission::firstOrCreate(['name' => 'create_user']);
        Permission::firstOrCreate(['name' => 'delete_user']);
        Permission::firstOrCreate(['name' => 'update_user']);
        Permission::firstOrCreate(['name' => 'view_all_post']);
        Permission::firstOrCreate(['name' => 'view_public_post']);
        Permission::firstOrCreate(['name' => 'view_group_post']);
        // Permission::firstOrCreate(['name' => '']);


        $registered_user = Role::where('name', 'registered')->first();

        $registered_user_permissions = [
            'create_post',
            'delete_user_post',
            'update_user_post',
            'download_public_post',
            'update_user',
            'view_public_post',
            'view_group_post',
        ];

        foreach ($registered_user_permissions as $permission) {
            $registered_user->givePermissionTo($permission);
        }


        $admin_user = Role::where('name', 'admin')->first();

        $admin_user_permissions = [
            'create_post',
            'delete_all_post',
            'update_all_post',
            'download_all_post',
            'create_user',
            'delete_user',
            'update_user',
            'view_all_post',
        ];

        foreach ($admin_user_permissions as $permission) {
            $admin_user ->givePermissionTo($permission);
        }
    }
}
