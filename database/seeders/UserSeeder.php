<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Andres',
            'lastname' => 'Cordoba',
            'email' => 'andru-81@hotmail.com',
            'phone' => '+575004443232',
            'password' => Hash::make('r.12345'),
        ]);
    }
}
