<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Make;
use App\Models\VehicleModel;

class VehicleModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample makes
        $makes = [
            'Ford', 'Chevrolet', 'Toyota', 'Honda', 'BMW',
        ];

        foreach ($makes as $makeName) {
            // if it already exists, just get it
            $make = Make::firstOrCreate(['name' => $makeName]);

            // Sample vehicle models for each make
            $models = [
                'F-150', 'Silverado', 'Camry', 'Civic', 'X5',
            ];

            foreach ($models as $modelName) {
                VehicleModel::create([
                    'name' => $modelName,
                    'make_id' => $make->id,
                ]);
            }
        }
    }
}
