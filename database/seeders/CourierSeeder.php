<?php

namespace Database\Seeders;

use App\Models\Courier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Courier::insert([
            [
                'code' => 'jne',
                'title' => 'Jalur Nugraha Ekakurir (JNE)'
            ],
            [
                'code' => 'pos',
                'title' => 'POS Indonesia'
            ],
            [
                'code' => 'tiki',
                'title' => 'Citra Van Titipan Kilat'
            ]
        ]);
    }
}
