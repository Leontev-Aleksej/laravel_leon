<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{


public function run(): void
{
    User::create([
        'firstname' => 'Admin',
        'middlename' => 'Admin',
        'lastname' => 'Admin',
        'tel' => '1234567890',
        'login' => 'admin',
        'role' => 'admin',
        'email' => 'admin@mail.com',
        'password' => bcrypt('admin2025'),
    ]);
    $this->call(FurnitureSeeder::class);
}
}