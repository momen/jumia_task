<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::truncate();
        $users = [
            [
                'name' => 'Momen Negm',
                'email' => 'momen12345@example.com',
                'password' => bcrypt('1234567890'),
                'user_type' => User::Regular,
            ],
            [
                'name' => 'Momen Negm ',
                'email' => 'momen123456@example.com',
                'password' => bcrypt('1234567890'),
                'user_type' => User::Manager,
            ],
        ];

        User::insert($users);
    }
}
