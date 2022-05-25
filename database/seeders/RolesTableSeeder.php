<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name' => 'Admin',
        ]);

        Permission::create(
            ['name' => 'create roles'],
        );

        Permission::create(
            ['name' => 'edit roles'],
        );

        Permission::create(
            ['name' => 'delete roles']
        );

        $permissions = Permission::all();
        $role->givePermissionTo($permissions);
    }
}
