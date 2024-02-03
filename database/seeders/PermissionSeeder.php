<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate([
            'name'      => 'Browse admin',
            'key'       => 'browse_admin',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'Administrator',
            'key'       => 'administrator',
            'table_name' => null,
        ]);

        Permission::firstOrCreate([
            'name'      => 'Banned',
            'key'       => 'banned',
            'table_name' => null,
        ]);

        Permission::generateFor('permissions');
        Permission::generateFor('roles');
        Permission::generateFor('countries');
        Permission::generateFor('cities');
        Permission::generateFor('users');
    }
}