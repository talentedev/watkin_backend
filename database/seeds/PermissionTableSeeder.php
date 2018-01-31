<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Suser for the management of the backend
        $admin = new Permission();
        $admin->name  = 'admin';
        $admin->guard_name = 'web';
        $admin->save();

        // API
        $api = new Permission();
        $api->name  = 'api';
        $api->guard_name = 'web';
        $api->save();
    }
}
