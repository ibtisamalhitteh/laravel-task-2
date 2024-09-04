<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allRoles = Role::all()->keyBy('id');
        $permissions = [
            'add' => [Role::ROLE_ADMIN],
            'edit' => [Role::ROLE_ADMIN],
            'delete' => [Role::ROLE_ADMIN],
            'view' => [Role::ROLE_ADMIN],
            'user-view' => [Role::ROLE_USER],
            'user-add-comment' => [Role::ROLE_USER],
        ];


        foreach ($permissions as $key => $roles) {
            $permission = Permission::create(['name' => $key]);
            foreach ($roles as $role) {
                $allRoles[$role]->permissions()->attach($permission->id);
            }
        }

    }
}
