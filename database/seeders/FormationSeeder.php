<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Formation::factory(10)->create();

        $formations = [
            'Programmation',
            'UX / UI',
            'Cuisine',
            'Infographie',
            'Photographie',
            'Menuisier',
        ];

        foreach ($formations as $formation) {
            Formation::create([
                'nom' => $formation,
                'description' => 'Formation en ' . strtolower($formation), 
            ]);
        }
    }
}
