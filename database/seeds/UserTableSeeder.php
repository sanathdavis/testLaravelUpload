<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'User 1',
                'email' => '1@example.com',
                'password' => 'User 1',
            ],
            [
                'name' => 'User 2',
                'email' => '2@example.com',
                'password' => 'User 2',
            ]
        ]);
    }
}
