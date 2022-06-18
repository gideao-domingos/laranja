<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
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
        User::create([
            'name' => 'Armando',
            'email' =>'edson2017silva123@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'password_changed_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Helder',
            'email' =>'helderlucheses@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'password_changed_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Rodrigo',
            'email' =>'rodrigogunza007@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'password_changed_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'DD',
            'email' =>'uniilsiis@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'password_changed_at' => now(),
            'remember_token' => Str::random(10),
        ]);

    }
}
