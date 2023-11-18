<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'yonis',
            'email' => 'thinking.nekad@gmail.com',
            'phone' => '0123452123',
            'role' => 'ADMIN',
            'password' => Hash::make('password')
        ]);
    }
}
