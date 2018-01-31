<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin User
        $admin = new App\User;
        $admin->name = "Admin User";
        $admin->email = "admin@gmail.com";
        $admin->password = \Illuminate\Support\Facades\Hash::make("testing");        
        $admin->save();

        $admin->assignRole('admin');

        // Account Manager
        $manager = new App\User;
        $manager->name = "Account Manager";
        $manager->email = "manager@gmail.com";
        $manager->password = \Illuminate\Support\Facades\Hash::make("testing");
        $manager->save();

        $manager->assignRole('manager');

        // Client
        $client = new App\User;
        $client->name = "Client";
        $client->email = "client@gmail.com";
        $client->password = \Illuminate\Support\Facades\Hash::make("testing");
        $client->save();

        $client->assignRole('client');

        // Virtual Assistant
        $assistant = new App\User;
        $assistant->name = "Virtual Assistant";
        $assistant->email = "assistant@gmail.com";
        $assistant->password = \Illuminate\Support\Facades\Hash::make("testing");
        $assistant->save();

        $assistant->assignRole('assistant');
    }
}
