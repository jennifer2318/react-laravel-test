<?php

use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 400; $i++) {
            DB::table('category_product')->insert([
                'category_id' => $faker->numberBetween(1, 15),
                'product_id' => $i,
            ]);
        }
    }
}
