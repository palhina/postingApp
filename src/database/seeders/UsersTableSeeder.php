<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


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
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'user2',
                'email' => 'mail2@mail.com',
                'password' =>bcrypt('1234567890'),
                'email_verified_at' => null,
            ],
        ];
    foreach ($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'email_verified_at' => $user['email_verified_at']
            ]);
        }
    }
}
