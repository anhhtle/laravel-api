<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'A',
            'email' => 'A@gmail.com',
            'password' => 'a',
            'balance' => 1234.56,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
