<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Furniture;

class FurnitureSeeder extends Seeder
{
    public function run(): void
    {
        Furniture::create(['title' => 'Табурет', 'price' => 500.00]);
        Furniture::create(['title' => 'Стул', 'price' => 1500.00]);
        Furniture::create(['title' => 'Кресло', 'price' => 3000.00]);
        Furniture::create(['title' => 'Диван', 'price' => 100000.00]);
    }
}