<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Alcoholic Beverage 1',
            'slug' => 'alcoholic-beverage-1',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Alcoholic Beverage 2',
            'slug' => 'alcoholic-beverage-2',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'Alcoholic Beverage 3',
            'slug' => 'alcoholic-beverage-3',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Alcoholic Beverage 4',
            'slug' => 'alcoholic-beverage-4',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Alcoholic Beverage 5',
            'slug' => 'alcoholic-beverage-5',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Alcoholic Beverage 6',
            'slug' => 'alcoholic-beverage-6',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Alcoholic Beverage 7',
            'slug' => 'alcoholic-beverage-7',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'Alcoholic Beverage 8',
            'slug' => 'alcoholic-beverage-8',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Alcoholic Beverage 9',
            'slug' => 'alcoholic-beverage-9',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'Alcoholic Beverage 10',
            'slug' => 'alcoholic-beverage-10',
            'details' => 'Some little details here..',
            'price' => 2400,
            'description' => 'Product description to go here..'
        ])->categories()->attach(3);

        $product = Product::find(1);
        $product->categories()->attach(2);
    }
}
