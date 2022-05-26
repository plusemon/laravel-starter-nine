<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            Role::insert([
                ['name' => 'Super Admin', 'guard_name' => 'web'],
                ['name' => 'Admin', 'guard_name' => 'web'],
            ]);

            Permission::insert([
                ['name' => 'create roles', 'guard_name' => 'web'],
                ['name' => 'update roles', 'guard_name' => 'web'],
                ['name' => 'delete roles', 'guard_name' => 'web'],
            ]);

            $super_admin = User::first();
            if ($super_admin) {
                $super_admin->assignRole(Role::findByName('Super Admin'));
            }
        });
    }
}
