<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$role1, $role2]);

        $permission = Permission::create(['name' => 'admin.user.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.user.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role1]);

        //PERMISOS PARA LAS CATEGORIAS
        $permission = Permission::create(['name' => 'admin.category.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.category.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.category.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.category.destroy'])->syncRoles([$role1]);

        //PERMISOS PARA LAS ETIQUETAS
        $permission = Permission::create(['name' => 'admin.tag.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.tag.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.tag.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.tag.destroy'])->syncRoles([$role1]);


        //posts
        $permission = Permission::create(['name' => 'admin.post.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.post.create'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.post.edit'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.post.destroy'])->syncRoles([$role1, $role2]);

    }
}
