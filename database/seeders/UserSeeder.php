<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Jakub Mazur',
            'email' => 'admin@twojpupil.pl',
            'password' => Hash::make('haslo123'),
        ]);
        User::create([
            'name' => 'Jan Kowalski',
            'email' => 'jankowalski@twojpupil.pl',
            'password' => Hash::make('haslo123'),
        ]);
    }
}