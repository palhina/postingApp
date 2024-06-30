<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'user1',
                'email' => 'mail@mail.com',
                'password' =>bcrypt('1234567890'),
            ],
            [
                'name' => 'user2',
                'email' => 'mail2@mail.com',
                'password' =>bcrypt('1234567890'),
            ],
        ];
    foreach ($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }
    }
}
