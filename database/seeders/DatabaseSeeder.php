<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::insert([
        //     [
        //         'name' => 'Test User',
        //         'email' => 'test11@example.com',
        //         'password' => Crypt::encryptString('12345')
        //     ],
        //     [
        //         'name' => 'Test 2 User',
        //         'email' => 'test2@example.com',
        //         'password' => Crypt::encryptString('12345')

        //     ],
        //     [
        //         'name' => 'Test 3 User',
        //         'email' => 'test3@example.com',
        //         'password' => Crypt::encryptString('12345')

        //     ], 
        //     [
        //         'name' => 'Test 4 User',
        //         'email' => 'test4@example.com',
        //         'password' => Crypt::encryptString('12345')

        //     ],
        //     [
        //         'name' => 'Test 5 User',
        //         'email' => 'test5@example.com',
        //         'password' => Crypt::encryptString('12345')

        //     ], 
        //     [
        //         'name' => 'Test 6 User',
        //         'email' => 'test6@example.com',
        //         'password' => Crypt::encryptString('12345')

        //     ],


        // ]);
        
    }
}
