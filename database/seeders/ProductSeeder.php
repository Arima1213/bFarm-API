<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 4',
                'description' => 'Description for product 3',
                'price' => 300.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
