<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('enrollments')->insert([
            [
                'user_id' => 1, // Admin User
                'language_id' => 1, // Bahasa Inggris
                'attendance_count' => 5,
                'progress' => 75.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Regular User
                'language_id' => 2, // Bahasa Jepang
                'attendance_count' => 2,
                'progress' => 40.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
