<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batiment;


class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batiment::factory()->count(30)->create(); // génère un objet avec count et enregistre dans la base de données
    }
}
