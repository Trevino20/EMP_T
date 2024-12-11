<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\emp;

class EmpeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        for($i=0; $i<=100; $i++){
            emp::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email(),
                'desig' => fake()->randomElement(['Software Developer', 'Data Scientist','System Administrator','Network Engineer',
                                                    'Cybersecurity Analyst','Cloud Engineer']),
                'contact' => fake()->phoneNumber(),
                'gender' => fake()->randomElement(['Male', 'Female']) ,
    
            ]);
        }

    
    }
}
