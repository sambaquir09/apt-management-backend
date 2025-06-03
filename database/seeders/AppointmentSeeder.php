<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::factory()->count(10)->create([
            // 'name' => fake()->name(),
            // 'email' => fake()->email(),
            // 'contact' => fake()->phoneNumber(),
            // 'address' => fake()->address(),
            // 'status' => fake()->randomElement(['pending', 'approved', 'rejected'])
        ]);
    }
}
