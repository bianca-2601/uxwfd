<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Woman Clothing & Accessories', 'Man Clothing & Accessories', 'Kids Clothing & Accessories', 'Muslim Clothing & Accessories',
         'Sports Equipment', 'Carpentry', 'Books', 'Automotive',
         'Electronics', 'Mom & Baby Essentials', 'Gaming', 'Music Essentials', 
         'Toys & Hobbies', 'Gadgets', 'Furniture', 'Kitchen Items',];

        foreach ($categories as $name) {
            \App\Models\Category::create(['name' => $name]);
        }
    }
}
