<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::create([
            'name' => 'User',
            'email' => 'les@user.com',
            'password' => bcrypt('123456789'),
        ]);

        $User->assignRole('user');

        $Tentor = User::create([
            'name' => 'Tentor',
            'email' => 'les@tentor.com',
            'password' => bcrypt('123456789'),
        ]);

        $Tentor->assignRole('tentor');

        $Admin = User::create([
            'name' => 'Admin',
            'email' => 'les@admin.com',
            'password' => bcrypt('123456789'),
        ]);

        $Admin->assignRole('admin');
    }
}
