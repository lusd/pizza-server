<?php

use App\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  /*  public function run()
    {
        \App\OrderItem::truncate();
        \App\OrderItem::unguard();

        $faker = \Faker\Factory::create();

        \App\Order::all()->each(function ($order) use ($faker) {
            \App\OrderItem::create([
                'order_id' => $order->id,
                'quantity' => $faker->numberBetween(1,6),
            ]);
        });
    } */
}
