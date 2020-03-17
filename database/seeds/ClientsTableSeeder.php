<?php

use App\Client;
use Illuminate\Database\Seeder;

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
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 2,
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);

        $client->create([
            'user_id' => 3,
            'group_id' => 1,
            'branch_id' => 1,
            'registration_date' => '2020-03-16',
            'terms_and_conditions' => true
        ]);
    }
}
