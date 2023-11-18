<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=>'bps1278',
                'password'=>bcrypt('rekrut2024')
            ],
            [
                'username'=>'banu',
                'password'=>bcrypt('banu1609')
            ]
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
