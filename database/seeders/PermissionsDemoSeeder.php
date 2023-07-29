<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'create-posts']);
        // Permission::create(['name' => 'delete-posts']);
        // Permission::create(['name' => 'edit-posts']);
        // Permission::create(['name' => 'create-privacy']);
        // Permission::create(['name' => 'delete-privacy']);
        // Permission::create(['name' => 'edit-privacy']);
        // Permission::create(['name' => 'create-term']);
        // Permission::create(['name' => 'delete-term']);
        // Permission::create(['name' => 'edit-term']);
     
        //create super admin 
        $role1 = Role::create(['name' => 'super-admin']);
        $user = \App\Models\User::factory()->create([
           
            'name' => 'super-admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role1);
    }
}