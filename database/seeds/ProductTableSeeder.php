<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'img/product1.jpg',
            'title' => 'Test Pructs1',
            'description' => 'Opis',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'img/product1.jpg',
            'title' => 'Test Pructs2',
            'description' => 'Opis',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'img/product1.jpg',
            'title' => 'Test Pructs',
            'description' => 'Opis3',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'img/product1.jpg',
            'title' => 'Test Pructs4',
            'description' => 'Opis',
            'price' => 10
        ]);
        $product->save();
    }
}
