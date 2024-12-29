<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->insert([
            [
                'name' => 'Bahasa Inggris',
                'description' => 'Kelas belajar bahasa Inggris untuk pemula.',
                'schedule' => '2024-01-15 10:00:00',
                'capacity' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bahasa Jepang',
                'description' => 'Kelas belajar bahasa Jepang tingkat dasar.',
                'schedule' => '2024-02-01 14:00:00',
                'capacity' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
