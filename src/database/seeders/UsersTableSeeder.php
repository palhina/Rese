<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        [
            'name' => 'テスト太郎',
            'email' => '111@mail.com',
            'password' =>Hash::make('1234567890'),
        ],
        [
            'name' => 'テスト次郎',
            'email' => '222@mail.com',
            'password' => Hash::make('1234567890')
        ],
        [
            'name' => 'テスト三郎',
            'email' => '333@mail.com',
            'password' => Hash::make('1234567890')
        ],
        [
            'name' => 'テスト四郎',
            'email' => '444@mail.com',
            'password' => Hash::make('1234567890')
        ],
        [
            'name' => 'テスト五郎',
            'email' => '555@mail.com',
            'password' => Hash::make('1234567890')
        ]
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
