<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body\BodyMeasurement;


class BodyMeasurementSeeder extends Seeder
{

    protected array $bodyMeasurements = [
        [
            'profile_id' => 1,
            'weight_kg' => 54.2,
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->bodyMeasurements as $bodyMeasurementToCreate) {
            BodyMeasurement::updateOrCreate([
                'profile_id' => $bodyMeasurementToCreate['profile_id'],
                'weight_kg' => $bodyMeasurementToCreate['weight_kg'],
                'measured_at' => now()
            ]);
        }
    }
}
