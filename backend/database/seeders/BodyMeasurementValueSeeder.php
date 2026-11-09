<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body\BodyMeasurementValue;
class BodyMeasurementValueSeeder extends Seeder
{

    protected $bodyMeasurementValues = [
        [
            'measurement_id' => 1,
            'metric' => 'shoulder',
            'aside' => null,
            'value_cm' => 96.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'chest',
            'aside' => null,
            'value_cm' => 84.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'waist',
            'aside' => null,
            'value_cm' => 73.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'abdomen',
            'aside' => null,
            'value_cm' => 82.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'hip',
            'aside' => null,
            'value_cm' => 100.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'thigh_proximal',
            'aside' => 'right',
            'value_cm' => 62.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'thigh_proximal',
            'aside' => 'left',
            'value_cm' => 61.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'thigh_medial',
            'aside' => 'right',
            'value_cm' => 55.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'thigh_medial',
            'aside' => 'left',
            'value_cm' => 55.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'arm',
            'aside' => 'right',
            'value_cm' => 29.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'arm',
            'aside' => 'left',
            'value_cm' => 29.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'calf',
            'aside' => 'right',
            'value_cm' => 34.00
        ],
        [
            'measurement_id' => 1,
            'metric' => 'calf',
            'aside' => 'left',
            'value_cm' => 34.00
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->bodyMeasurementValues as $bodyMeasurementValueToCreate) {
            BodyMeasurementValue::updateOrCreate([
                'measurement_id' => $bodyMeasurementValueToCreate['measurement_id'],
                'metric' => $bodyMeasurementValueToCreate['metric'],
                'aside' => $bodyMeasurementValueToCreate['aside'],
                'value_cm' => $bodyMeasurementValueToCreate['value_cm'],
            ]);
        }
    }
}
