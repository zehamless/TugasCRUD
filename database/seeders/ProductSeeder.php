<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => 100,
            'category_id' => 1,
            'image' => 'https://source.unsplash.com/random'
        ]);
        Product::create([
            'name' => 'Product 2',
            'description' => 'Description 2',
            'price' => 200,
            'category_id' => 2,
            'image' => 'https://source.unsplash.com/random'
        ]);
        Product::create([
            'name' => 'Product 3',
            'description' => 'Description 3',
            'price' => 300,
            'category_id' => 3,
            'image' => 'https://source.unsplash.com/random'
        ]);
        Product::create([
            'name' => 'Product 4',
            'description' => 'Description 4',
            'price' => 300,
            'category_id' => 3,
            'image' => 'https://source.unsplash.com/random'
        ]);
    }
}
