<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(100)
                    ->create()
                    ->each(function ($product_make) {
            
            $products = Product::factory(1)->make();
            
            foreach ($products as $prod) {
                $product_make->product_m()->save($prod);
            }            
        });
    }
}
