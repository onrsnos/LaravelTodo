<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Database\Seeders\UserSeeder;
use Database\Seeders\GorevlerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([

            UserSeeder::class,
            GorevlerSeeder::class,
            
        ]);
        
        
    }
}
