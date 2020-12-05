<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@test.ru',
            'password' => '$2y$10$z1ujInWp2r5Y.KPM7I/nDeoEF25PjJbv6bMJcYrNjf/F4/BCIpNyK', //admin
            User::CREATED_AT => Carbon::now(),
            User::UPDATED_AT => Carbon::now(),
        ]);
    }
}
