<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = User::create([
            'name' => 'Master',
            'email' => 'master@gmail.com',
            'username' => 'master',
            'password' => bcrypt('secret123')
        ]);

        $roleMaster = Role::create(['name' => 'Master']);
        $permissionsMaster = Permission::pluck('id','id')->all();
        $roleMaster->syncPermissions($permissionsMaster);
        $master->assignRole([$roleMaster->id]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('secret1234')
        ]);

        $roleAdmin = Role::create(['name' => 'Admin']);
        $permissionsAdmin = Permission::pluck('id','id')->all();
        $roleAdmin->syncPermissions($permissionsAdmin);
        $admin->assignRole([$roleAdmin->id]);
    }
}
