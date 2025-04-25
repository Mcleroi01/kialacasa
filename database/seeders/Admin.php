<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Créer l'utilisateur admin
        $admin = User::firstOrCreate(
            ['email' => 'supportIt@kialacasa.com'],
            [
                'name' => 'supportIt',
                'password' => Hash::make('password'),
            ]
        );

        // Assigner le rôle admin
        if (!$admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}