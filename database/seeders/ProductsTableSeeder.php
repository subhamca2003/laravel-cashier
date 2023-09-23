<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Database\Factories\ProductFactory; // Import the factory class for Product

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Use the factory to create records
        Product::factory()->count(150)->create();
    }
}
