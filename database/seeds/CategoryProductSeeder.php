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
        for ($i = 1; $i <= 38; $i++) {
            DB::table('category_product')->insert([
                'category_id' => 1,
                'product_id' => $i,
            ]);
        }

        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 39,
        ]);

        DB::table('category_product')->insert([
            'category_id' => 3,
            'product_id' => 40,
        ]);
    }
}
