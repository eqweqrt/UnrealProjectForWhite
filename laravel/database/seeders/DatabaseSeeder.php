<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => RoleEnum::Admin->value,
        ]);

        Role::create([
            'name' => RoleEnum::Employee->value,
        ]);

        $user = User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        $user->assignRole(RoleEnum::Admin);
    }
}
