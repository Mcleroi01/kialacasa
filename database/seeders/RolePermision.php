<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermision extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔐 Permissions
        $permissions = [
            'manage establishments',
            'manage reservations',
            'view dashboard',
            'make reservation'
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // 🎭 Roles
        $admin  = Role::firstOrCreate(['name' => 'admin']);
        $owner  = Role::firstOrCreate(['name' => 'owner']);
        $client = Role::firstOrCreate(['name' => 'client']);

        // 🧩 Attribution des permissions
        $admin->givePermissionTo(Permission::all());

        $owner->givePermissionTo([
            'manage establishments',
            'manage reservations',
            'view dashboard',
        ]);

        $client->givePermissionTo([
            'view dashboard',
            'make reservation',
        ]);

    }
}