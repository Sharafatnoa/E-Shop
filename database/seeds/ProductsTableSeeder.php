<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() :void
    {

        factory(\App\Models\Product::class, 20)->create();

        $products = \App\Models\Product::select('id')->get();


    foreach ($products as $product){
        $product->addMediaFromUrl('https://lorempixel.com/640/480/?88132')->toMediaCollection('products');
    }
    }
}
