<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $users = [
            [
                'id'             => 1,
                'name'           => __('Admin'),
                'email'          => 'admin@admin.com',
                'password'       => 'password',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => __('User'),
                'email'          => 'user@user.com',
                'password'       => 'password',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
