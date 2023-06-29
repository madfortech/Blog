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
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'edit posts']);
     
        //create super admin 
        $role1 = Role::create(['name' => 'Super-Admin']);
        $user = \App\Models\User::factory()->create([
           
            'name' => 'super-admin',
            'email' => 'superadmin@example.com',
            'password' => 'password',
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role1);
    }
}