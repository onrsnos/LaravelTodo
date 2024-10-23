<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gorevler;


class GorevlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Gorevler::insert([
            [
                'name' => 'görev 1',
                'description' => 'açıklama 1',
                'status' => 'Aktif'
            ],
            [
                'name' => 'görev 2',
                'description' => 'açıklama 2',
                'status' => 'Pasif'
            ],
            [
                'name' => 'görev 3',
                'description' => 'açıklama 3',
                'status' => 'Aktif'
            ],
            [
                'name' => 'görev 4',
                'description' => 'açıklama 4',
                'status' => 'Pasif'
            ],
            [
                'name' => 'görev 5',
                'description' => 'açıklama 5',
                'status' => 'Aktif'
            ],
        ]);

    }
}
