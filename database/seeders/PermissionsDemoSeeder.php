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
     
        //create super admin 
        $role1 = Role::create(['name' => 'super-admin']);
        $role2 = Role::create(['name' => 'user']);
        
        $user = \App\Models\User::factory()->create([
            'name' => 'super-admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role1);   

        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role2);   
    }
}