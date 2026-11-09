<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body\BodyProfile;

class BodyProfileSeeder extends Seeder
{
    protected array $bodyProfile = [
        [
            'user_id' => 1,
            'height_cm' => 150,
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->bodyProfile as $bodyProfileToCreate) {
            BodyProfile::updateOrCreate([
                'user_id' => $bodyProfileToCreate['user_id'],
                'height_cm' => $bodyProfileToCreate['height_cm'],
            ]);
        }
    }
}
