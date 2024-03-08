<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::create([
            'name' => 'View',
        ]);


        $role = Role::create([
            'name' => 'Admin',
        ]);

        $role->givePermissionTo($permission);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@yourdomain.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),

        ]);
        $user->assignRole($role);
    }
}
