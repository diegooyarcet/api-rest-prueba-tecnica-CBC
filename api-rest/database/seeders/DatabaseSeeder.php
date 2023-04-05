<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\employee::factory(1)->create();

        \App\Models\employee::factory(10)->create([
            'employee_id'=>1,
         ]);
    }
}
