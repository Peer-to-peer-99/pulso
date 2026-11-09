<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    protected array $users = [
        [
            'name' => 'Anna Karoline D. Oliveira',
            'email' => 'anna.oliveira@pulso.com',
            'password' => 'password',
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->users as $createToUser) {
            User::updateOrCreate(
                ['email' => $createToUser['email']],
                [
                    'name' => $createToUser['name'],
                    'password' => Hash::make($createToUser['password']),
                ]
            );
        }
    }
}
