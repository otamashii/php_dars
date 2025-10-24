<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CarFactory orqali 50 ta mashina qo‘shish
        Car::factory(50)->create();
    }
}

