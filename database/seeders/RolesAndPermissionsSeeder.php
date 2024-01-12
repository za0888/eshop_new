<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit skus']);
        Permission::create(['name' => 'delete skus']);
        Permission::create(['name' => 'publish skus']);
        Permission::create(['name' => 'unpublish skus']);

        Permission::create(['name' => 'edit order']);
        Permission::create(['name' => 'delete order']);
        Permission::create(['name' => 'publish order']);
        Permission::create(['name' => 'unpublish order']);

        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'delete product']);
        Permission::create(['name' => 'publish product']);
        Permission::create(['name' => 'unpublish product']);

        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);
        Permission::create(['name' => 'publish category']);
        Permission::create(['name' => 'unpublish category']);

        Permission::create(['name' => 'edit unit']);
        Permission::create(['name' => 'delete unit']);
        Permission::create(['name' => 'publish unit']);
        Permission::create(['name' => 'unpublish unit']);

        Permission::create(['name' => 'edit stock']);
        Permission::create(['name' => 'delete stock']);
        Permission::create(['name' => 'publish stock']);
        Permission::create(['name' => 'unpublish stock']);

        Permission::create(['name' => 'edit vendor']);
        Permission::create(['name' => 'delete vendor']);
        Permission::create(['name' => 'publish vendor']);
        Permission::create(['name' => 'unpublish vendor']);

        Permission::create(['name' => 'edit attribute']);
        Permission::create(['name' => 'delete attribute']);
        Permission::create(['name' => 'publish attribute']);
        Permission::create(['name' => 'unpublish attribute']);

        Permission::create(['name' => 'edit attribute option']);
        Permission::create(['name' => 'delete attribute option']);
        Permission::create(['name' => 'publish attribute option']);
        Permission::create(['name' => 'unpublish attribute option']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());
//        $role->givePermissionTo('edit skus');

        // or may be done by chaining
        $role = Role::create(['name' => 'manager'])
            ->givePermissionTo(['publish order', 'unpublish order']);

        $role = Role::create(['name' => 'boss']);
        $role->givePermissionTo(Permission::all());
    }
}
