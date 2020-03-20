<?php

use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();

        $client->create([
            'user_id' => 1,
            'name' => 'aaaaaa',
            'email' => 'a@a.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 2,
            'name' => 'rrchrcdsytfc',
            'email' => 'd@a.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 1,
            'name' => 'aajhcjkaaaa',
            'email' => 'app@a.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);
    }
}
