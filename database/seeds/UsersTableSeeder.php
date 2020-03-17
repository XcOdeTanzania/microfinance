<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'zTest',
            'email' => 'z@z.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'yTest',
            'email' => 'y@y.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'xTest',
            'email' => 'x@x.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'wTest',
            'email' => 'w@w.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
