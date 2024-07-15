<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'email@example.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Fahki Rohandi',
                'email' => 'fahkirohandi07@gmail.com',
                'username' => 'pakisenju',
                'password' => Hash::make('badboy07'),
            ]
        ];

        foreach ($users as $userData) {
            $users = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'username' => $userData['username'],
                'password' => $userData['password']
            ]);
        }
    }
}
