<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'name' => "user 1",
                    'email' => "user1@mail.com",
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678')
                ],
                [
                    'name' => "user 2",
                    'email' => "user2@mail.com",
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678')
                ],
                [
                    'name' => "user 3",
                    'email' => "user3@mail.com",
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678')
                ],
                [
                    'name' => "user 4",
                    'email' => "user4@mail.com",
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678')
                ]
            ]
        );
    }
}
