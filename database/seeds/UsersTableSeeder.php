<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$8HPRfAcrq/WV9tFeCtczveR4FeK1ANSKfB/lQEGAZQ4lzt/q8Z3Wa',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
