<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
         \App\Product::truncate();
         \App\Product::unguard();

         $faker = \Faker\Factory::create();

         $pizzaImgs = array(
            'https://images.unsplash.com/photo-1585238342024-78d387f4a707?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80',
            'https://images.unsplash.com/photo-1509403491765-9fb9d773ca6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=818&q=80',
            'https://images.unsplash.com/photo-1590083745251-4fdb0b285c6a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=778&q=80',
            'https://images.unsplash.com/photo-1566222499048-9538f86d4675?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=762&q=80',
            'https://images.unsplash.com/photo-1585828922344-85c9daa264b0?ixlib=rb-1.2.1&auto=format&fit=crop&w=852&q=80',
            'https://images.unsplash.com/photo-1554136812-8b7875b188b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1527133256227-fc3549f55332?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80',
            'https://images.unsplash.com/photo-1558803037-d7c30788c105?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=801&q=80',
         );

         foreach ($pizzaImgs as $value) {
            \App\Product::create([
                'name'         => $faker->colorName,
                'description'  => $faker->text(100),
                'priceE'       => $faker->randomFloat(2, 5, 10),
                'imageUrl'     => $value,
            ]);
         }
    }
}
