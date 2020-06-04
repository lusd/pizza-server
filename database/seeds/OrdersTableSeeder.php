<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   /*  public function run()
    {
        \App\Order::truncate();
        \App\Order::unguard();

        $faker = \Faker\Factory::create();

        \App\User::all()->each(function ($user) use ($faker) {
            foreach (range(1,5) as $i) {
                \App\Order::create([
                    'user_id' => $user->id,
                    'address' => $faker->address,
                    'comment' => $faker->text(100),
                ]);
            }
        });
    } */
}
