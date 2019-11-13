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
                'password'       => '$2y$10$4XNYw9uknrH3syL.xRh/eOd.PStC8Wr5Z22eIelb88byvgYA1H6Mu',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
