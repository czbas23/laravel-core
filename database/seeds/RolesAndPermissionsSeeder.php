<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        # create permissions
        // Permission::firstOrCreate(['name' => 'article.index']);
        // Permission::firstOrCreate(['name' => 'article.store']);
        // Permission::firstOrCreate(['name' => 'article.show']);
        // Permission::firstOrCreate(['name' => 'article.update']);
        // Permission::firstOrCreate(['name' => 'article.destroy']);

        # create roles and assign created permissions
        Role::firstOrCreate(['name' => 'super-admin'])->syncPermissions(Permission::all());
        Role::firstOrCreate(['name' => 'admin'])->syncPermissions(Permission::all());
        // Role::firstOrCreate(['name' => 'user'])
        //     ->syncPermissions(
        //         Permission::where('name', 'like', 'article.%')->get()
        //     );
    }
}
