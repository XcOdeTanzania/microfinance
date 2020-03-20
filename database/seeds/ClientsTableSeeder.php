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
            'name' => 'Chris Tucker',
            'email' => 'cris@qlicue.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 2,
            'name' => 'Jackson Jackob',
            'email' => 'jack@gmail.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 1,
            'name' => 'Samuel David',
            'email' => 'sam@ymail.com',
            'password' => Hash::make('password'),
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);
    }
}
