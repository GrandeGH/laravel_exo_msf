<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeFormation;


class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $types = [
            'Coding 33',
            'Coding 34',
            'Coding 35',
            'UX',
            'IA 1',
            'IA 2',
            'Marketing Lab 1',
            'Marketing Lab 2',
            'Cyber Lab 3',
            'Cyber Lab 4',
        ];

        foreach ($types as $type) {
            TypeFormation::create([
                'nom' => $type,
                'description' => fake()->paragraph(), 
            ]);
        }
    }
}
