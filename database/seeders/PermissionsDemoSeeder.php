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
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create article']);
        Permission::create(['name' => 'delete article']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'view user report']);
        
        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'moderator']);
        $role1->givePermissionTo('view users');
        $role1->givePermissionTo('view user report');

         // create roles and assign existing permissions
         $role2 = Role::create(['name' => 'writer']);
         $role2->givePermissionTo('create article');

        
        // create user
        $role1 = Role::create(['name' => 'user']);

        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => '12345678',
        ]);
        $user->assignRole($role1);

        // Create writeer
        $user = \App\Models\User::factory()->create([
            'name' => 'writer',
            'username' => 'writer',
            'email' => 'writer@example.com',
            'password' => '12345678',
        ]);
        $user->assignRole($role2);
        
        //create super admin 
        $role3 = Role::create(['name' => 'Super-Admin']);
        $user = \App\Models\User::factory()->create([
           
            'name' => 'super-admin',
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => 'password',
        ])->givePermissionTo(Permission::all());
        $user->assignRole($role3);
    }
}