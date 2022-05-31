<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\RolesTableSeeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(RolesTableSeeder::class);


        DB::transaction(function () {
            $permissionList =  collect([
                'create roles',
                'edit roles',
                'delete roles',
            ]);

            $permissionList->map(function ($item) {
                Permission::create(['name' => $item]);
            });

            /**
             * @var Role role
             */
            $role = Role::create(['name' => 'Super Admin']);
            $role->givePermissionTo(Permission::all());


            $super_admin = User::create([
                'name' => 'System Admin',
                'email' => 'admin@mail.com',
                'username' => 'system_admin',
                'password' => Hash::make('admin'),
            ]);
            $super_admin->assignRole($role);
        });
    }
}
