<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = ['Manager', 'Bartender', 'Waiter', 'Security', 'Cleaner'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('employes')->insert([
                'name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'identification_number' => Str::random(10),
                'position' => $positions[array_rand($positions)]
            ]);
        }
    }
}