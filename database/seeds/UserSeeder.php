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
            'password' => '$2y$10$3mn2OgdMU0nDkTjSRrhyA.1q6E7w9fpjS.K1doZm1Ky6hDkxkJgui', //dw9OVNQifGjJEPT
            User::CREATED_AT => Carbon::now(),
            User::UPDATED_AT => Carbon::now(),
        ]);
    }
}
