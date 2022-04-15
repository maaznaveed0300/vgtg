<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesandPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // USER MODEL
        $userpermission1 = Permission::create(['name'=> 'create:user', 'description' => 'create:user']);
        $userpermission2 = Permission::create(['name'=> 'read:user', 'description' => 'read:user']);
        $userpermission3 = Permission::create(['name'=> 'update:user', 'description' => 'update:user']);
        $userpermission4 = Permission::create(['name'=> 'delete:user', 'description' => 'delete:user']);

        // ROLE MODEL
        $rolePermission1 = Permission::create(['name'=> 'create:user', 'description' => 'create:user']);
        $rolePermission2 = Permission::create(['name'=> 'read:user', 'description' => 'read:user']);
        $rolePermission3 = Permission::create(['name'=> 'update:user', 'description' => 'update:user']);
        $rolePermission4 = Permission::create(['name'=> 'delete:user', 'description' => 'delete:user']);
        // PERMISSION MODEL

        // ADMIN MODEL
    }
}
