<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::insert([
            [
                'name' => 'Test User',
                'email' => 'test11@example.com',
                'password' => Hash::make('12345'),
                // Crypt::encryptString('12345')
            ],
            [
                'name' => 'Test 2 User',
                'email' => 'test2@example.com',
                'password' => Hash::make('12345'),

            ],
            [
                'name' => 'Test 3 User',
                'email' => 'test3@example.com',
                'password' => Hash::make('12345'),

            ], 
            [
                'name' => 'Test 4 User',
                'email' => 'test4@example.com',
                'password' => Hash::make('12345'),

            ],
            [
                'name' => 'Test 5 User',
                'email' => 'test5@example.com',
                'password' => Hash::make('12345'),

            ], 
            [
                'name' => 'Test 6 User',
                'email' => 'test6@example.com',
                'password' => Hash::make('12345'),

            ],


        ]);
    }
}
