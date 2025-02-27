<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Candidate',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'staff',
            'guard_name' => 'web',
        ]);
    }
}