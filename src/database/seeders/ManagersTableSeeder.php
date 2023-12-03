<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Manager; 

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            [
                'name' => 'manager_test',
                'email' => 'manager1@mail.com',
                'password' =>Hash::make('1234567890'),
            ],
        ];
    foreach ($managers as $manager) 
        {
            Manager::create([
                'name' => $manager['name'],
                'email' => $manager['email'],
                'password' => $manager['password'],
            ]);
        }
    }
}
