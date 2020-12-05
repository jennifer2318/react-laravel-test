<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Uncategorised',
            'external_id' => '1',
        ]);

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('categories')->insert([
                'title' => $faker->text(15),
                'external_id' => $faker->unique(true)->numberBetween(2, 200),
            ]);
        }
    }
}
