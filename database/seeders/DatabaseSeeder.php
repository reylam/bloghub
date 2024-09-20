<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'username' => 'Aldo',
            'email' => 'aldo@email.com',
            'password' => 'aldopassword'
        ]);

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@email.com',
            'password' => 'adminpassword'
        ]);

        $role_user = Role::create([
            'name' =>   'user'
        ]);

        $role_admin = Role::create([
            'name' =>   'admin'
        ]);

        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => $role_user->id
        ]);

        RoleUser::create([
            'user_id' => $admin->id,
            'role_id' => $role_admin->id
        ]);
    }
}
