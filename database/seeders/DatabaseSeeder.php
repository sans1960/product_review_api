<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(50)->create();
         Product::factory(100)->create()->each(function ($product) {
             $product->reviews()->createMany(Review::factory(5)->make()->toArray());
         });


    }
}
