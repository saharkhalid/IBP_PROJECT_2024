<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Blue T-Shirt',
                'description' => 'Comfortable blue t-shirt with a stylish design.',
                'price' => 19.99,
                'quantity' => 50,
                'isActive' => true,
            ],
            [
                'name' => 'Premium Sneakers',
                'description' => 'High-quality sneakers made with premium materials.',
                'price' => 99.99,
                'quantity' => 20,
                'isActive' => true,
            ],
            [
                'name' => 'Vintage Watch',
                'description' => 'Classic vintage watch with a leather strap.',
                'price' => 149.99,
                'quantity' => 10,
                'isActive' => true,
            ],
            [
                'name' => 'Backpack',
                'description' => 'Durable and spacious backpack for daily use.',
                'price' => 49.99,
                'quantity' => 30,
                'isActive' => true,
            ],
            [
                'name' => 'Gaming Mouse',
                'description' => 'High-performance mouse for gaming enthusiasts',
                'price' => 59.99,
                'quantity' => 50,
                'isActive' => true,
            ],
            [
                'name' => 'Wireless Headphones',
                'description' => 'Immersive sound experience with wireless convenience',
                'price' => 129.99,
                'quantity' => 30,
                'isActive' => true,
            ],
            [
                'name' => 'Smartphone',
                'description' => 'Advanced smartphone with powerful features',
                'price' => 799.99,
                'quantity' => 20,
                'isActive' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
