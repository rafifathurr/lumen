<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Eau De Parfum Baccarat',
            'price' => 150000,
        ]);

        Product::create([
            'name' => 'Eau De Parfum Sauvage',
            'price' => 150000,
        ]);
    }
}
