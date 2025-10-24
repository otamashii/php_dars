<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // StudentFactory orqali 50 ta student qo‘shish
        Student::factory(50)->create();
    }
}

@for