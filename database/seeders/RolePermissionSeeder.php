<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['view-events', 'manage-events', 'manage-transactions'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $userRole = Role::firstOrCreate(['name' => 'user']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);


        $userRole->syncPermissions(['view-events']);
        $adminRole->syncPermissions($permissions);


        $admin = User::firstOrCreate(
            ['email' => 'admin@email.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123')
            ]
        );

        $user = User::firstOrCreate(
            ['email' => 'user@email.com'],
            [
                'name' => 'User',
                'password' => bcrypt('user123')
            ]
        );

        if (!$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        if (!$user->hasRole('user')) {
            $user->assignRole('user');
        }
    }
}
