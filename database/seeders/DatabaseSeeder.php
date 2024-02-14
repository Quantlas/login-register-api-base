<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Scopes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $scopes = [
            [
                'rol' => 'super-admin',
                'scope' => 'create-users',
                'description' => 'Can Create users'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'read-users',
                'description' => 'Can Get users'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'update-users',
                'description' => 'Can Update users'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'delete-users',
                'description' => 'Can Delete users'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'create-scopes',
                'description' => 'Can Create scopes'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'read-scopes',
                'description' => 'Can Get scopes'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'update-scopes',
                'description' => 'Can Update scopes'
            ],
            [
                'rol' => 'super-admin',
                'scope' => 'delete-scopes',
                'description' => 'Can Delete scopes'
            ],
            [
                'rol' => 'customer',
                'scope' => 'edit-me-info',
                'description' => 'Can Edit your info'
            ]
        ];

        foreach ($scopes as $scope) {
            Scopes::create([
                'rol' => $scope['rol'],
                'scope' => $scope['scope'],
                'description' => $scope['description']
            ]);
        }
    }
}
