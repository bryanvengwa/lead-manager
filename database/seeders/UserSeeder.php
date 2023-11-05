<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guestRole = Role::create(['name'=>'guest']);
        $adminRole = Role::create(['name'=>'admin']);
        $agentRole = Role::create(['name'=>'agent']);
        $installerRole = Role::create(['name'=>'installer']);
        $customerRole = Role::create(['name'=>'customer

        ']);
        User::create([
            'first_name'=> 'admin',
            'last_name'=> 'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$adminRole->id,

        ]);
        User::create([
            'first_name'=> 'agent',
            'last_name'=> 'agent',
            'email'=>'agent@agent.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$agentRole->id,

        ]);        User::create([
            'first_name'=> 'guest',
            'last_name'=> 'guest',
            'email'=>'guest@guest.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$guestRole->id,

        ]);        User::create([
            'first_name'=> 'installer',
            'last_name'=> 'installer',
            'email'=>'installer@installer.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$installerRole->id,

        ]);        User::create([
            'first_name'=> 'customer',
            'last_name'=> 'customer',
            'email'=>'customer@customer.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$customerRole->id,

        ]);

    }
}
