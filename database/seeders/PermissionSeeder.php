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
    //     // Reset cached roles and permissions
    //     app()['cache']->forget('maklad.permission.cache');

    //     //Array of Permisssions
    //     $permissions = [

    //         // access - general access
    //         // edit - make updates
    //         //download - Perform download
    //         'role_access',
    //         'role_create',
    //         'role_edit',
    //         'role_show',
    //         'role_delete',
    //         'permission_show',
    //         'permission_create',
    //         'permission_edit',
    //         'permission_access',
    //         'permission_delete',
    //         'user_management_access',
    //         'user_show',
    //         'user_create',
    //         'user_edit',
    //         'user_access',
    //         'user_delete',
    //         'account_show',
    //         'account_create',
    //         'account_edit',
    //         'account_access',
    //         'account_delete',
    //         'group_access',
    //         'group_create',
    //         'group_upload',
    //         'group_download',
    //         'group_edit',
    //         'group_show',
    //         'group_delete',
    //         'upload.show',
    //         'upload.create',
    //         'upload.edit',
    //         'upload.delete',
    //         'upload.download',
    //         'comment_create',
    //         'comment_edit',
    //         'comment_show',
    //         'comment_delete',
    //     ];

    //     //Create permisssions
    //     foreach($permissions as $permission){
    //         Permission::firstOrCreate(['name' => $permission]);
    //     }


    //     //Registered User
    //     $registered_user = Role::where('name', 'registered user')->first();

    //     $registered_user_permissions = [

    //         // access - general access
    //         // edit - make updates
    //         //download - Perform download
    //         'user_show',
    //         'user_access',
    //         'user_delete',
    //         'account_show',
    //         'account_create',
    //         'account_edit',
    //         'account_access',
    //         'account_delete',
    //         'upload.show',
    //         'upload.create',
    //         'upload.edit',
    //         'upload.delete',
    //         'upload.download',
    //         'group_create',
    //         'group_show',
    //         'group_delete',
    //         'group_edit',
    //         'comment_create',

    //     ];

    //     foreach ($registered_user_permissions as $permission) {
    //         $registered_user->givePermissionTo($permission);
    //     }


    //     //Admin user
    //     $admin = Role::where('name', 'admin')->first();

    //     $admin_permissions = [
    //         'user_management_access',
    //         'user_show',
    //         'user_create',
    //         'user_edit',
    //         'user_access',
    //         'user_delete',
    //         'account_show',
    //         'account_create',
    //         'account_edit',
    //         'account_access',
    //         'account_delete',
    //         'group_access',
    //         'group_create',
    //         'group_upload',
    //         'group_download',
    //         'group_edit',
    //         'group_show',
    //         'group_delete',
    //         'upload.show',
    //         'upload.create',
    //         'upload.edit',
    //         'upload.delete',
    //         'upload.download',
    //         'comment_create',
    //         'comment_edit',
    //         'comment_show',
    //         'comment_delete',
    //     ];

    //     foreach ($admin_permissions as $permission) {
    //         $admin->givePermissionTo($permission);
    //     }
    // }



            // Reset cached roles and permissions
            app()['cache']->forget('maklad.permission.cache');

            //Array of Permissions
            $permissions = [
                'create_user',
                'delete_user',
                'update_user',


                'create_post',
                'update_post',

                'view_user_post',
                'delete_user_post',
                'update_user_post',


                'delete_all_post',
                'update_all_post',
                'edit_all_group',
                'view_all_group',

                'view_all_post',
                'view_public_post',
                'download_all_post',
                'download_public_post',

                'create_group',
                'group_post',
                'view_group',
                'edit_group',
                'view_group_post',
                'download_group_post',


            ];

                //Create permisssions
            foreach($permissions as $permission){
                Permission::firstOrCreate(['name' => $permission]);
            }

            $registered_user = Role::where('name', 'registered user')->first();

            $registered_user_permissions = [
                'create_post',
                'delete_user_post',
                'update_user_post',
                'download_public_post',
                'update_user',
                'view_public_post',
                'view_group_post',
                'view_group',
                'create_group',
                'edit_group',
            ];

            foreach ($registered_user_permissions as $permission) {
                $registered_user->givePermissionTo($permission);
            }


            $admin = Role::where('name', 'admin')->first();

            $admin_user_permissions = [
                'create_post',
                'delete_all_post',
                'update_all_post',
                'download_all_post',
                'create_user',
                'delete_user',
                'update_user',
                'view_all_post',
                'view_all_group',
                'create_group',
                'edit_all_group',
                'create_user',
            ];

            foreach ($admin_user_permissions as $permission) {
                $admin->givePermissionTo($permission);
            }
        }
}
