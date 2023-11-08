<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        
        Product::create([
            'title' => 'Sample Product 1',
            'image' => 'sample1.jpg',
            'price' => 19.99,
        ]);

        Product::create([
            'title' => 'Sample Product 2',
            'image' => 'sample2.jpg',
            'price' => 24.99,
        ]);

        Product::create([
            'title' => 'Sample Product 3',
            'image' => 'sample3.jpg',
            'price' => 19.99,
        ]);

        Product::create([
            'title' => 'Sample Product 4',
            'image' => 'sample4.jpg',
            'price' => 24.99,
        ]);
    }
}
