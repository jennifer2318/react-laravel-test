<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 400; $i++) {
            DB::table('products')->insert([
                'title' => $faker->text(20),
                'description' => $faker->text(150),
                'created_at' => $faker->dateTimeThisYear(),
                'price' => $faker->randomFloat(2,100, 20000),
                'count' => $faker->numberBetween(1, 100),
                'external_id' => $faker->unique(true)->numberBetween(1, 800),
            ]);
        }
    }
}
