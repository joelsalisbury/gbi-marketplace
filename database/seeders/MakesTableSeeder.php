<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Make;

class MakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makes = [
            'Ford', 'Chevrolet', 'Toyota', 'Ram', 'Nissan',
            'GMC', 'Jeep', 'Honda', 'Subaru', 'Dodge',
            'Hyundai', 'Volkswagen', 'Mitsubishi', 'Mazda', 'Volvo',
            'Land Rover', 'Lexus', 'Mercedes-Benz', 'BMW', 'Audi',
            'Porsche', 'Jaguar', 'Tesla', 'Fiat', 'Acura',
            'Infiniti', 'Buick', 'Cadillac', 'Lincoln', 'Chrysler',
            'Kia', 'Suzuki', 'Maserati', 'Alfa Romeo', 'Genesis',
            'Bentley', 'Rolls-Royce', 'Lamborghini', 'Ferrari', 'McLaren'
            // Add more makes as needed
        ];

        foreach ($makes as $make) {
            Make::create(['name' => $make]);
        }
    }
}
