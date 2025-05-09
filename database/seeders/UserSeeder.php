<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            ['username' => 'admin', 'role' => 'admin'],
            ['username' => '196504121990031002', 'role' => 'guru'],
            ['username' => '198107252005012003', 'role' => 'guru'],
            ['username' => '199001152010012005', 'role' => 'guru'],
            ['username' => '199208172015031001', 'role' => 'guru'],
            ['username' => '199503062018011001', 'role' => 'guru'],
            ['username' => '196811221990091009', 'role' => 'guru'],
            ['username' => '197609111996071007', 'role' => 'guru'],
            ['username' => '197203051995012003', 'role' => 'guru'],
            ['username' => '198108101998022004', 'role' => 'guru'],
            ['username' => '198511221999032005', 'role' => 'guru'],
            ['username' => '197911011996042006', 'role' => 'guru'],
            ['username' => '198910151997052007', 'role' => 'guru'],
            ['username' => '197706301994062008', 'role' => 'guru'],
            ['username' => '198003101995072009', 'role' => 'guru'],
        ];

        // Tambahkan murid dari 1001 - 1045
        for ($i = 1001; $i <= 1045; $i++) {
            $userData[] = ['username' => (string)$i, 'role' => 'murid'];
        }

        foreach ($userData as $data) {
            User::firstOrCreate(
                ['username' => $data['username']],
                [
                    'password' => Hash::make('password'),
                    'role' => $data['role']
                ]
            );
        }
    }
}

