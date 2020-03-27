<?php

use App\GroupMemberAllocation;
use Illuminate\Database\Seeder;

class GroupMemberAllocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GroupMemberAllocation::create([
            'client_id' => 7,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 7

        ]);

        GroupMemberAllocation::create([
            'client_id' => 5,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 7

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 7

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 7

        ]);

        ////////
        GroupMemberAllocation::create([
            'client_id' => 7,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 5

        ]);

        GroupMemberAllocation::create([
            'client_id' => 5,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 5

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 5

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 5

        ]);


        /////
        GroupMemberAllocation::create([
            'client_id' => 7,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 4

        ]);

        GroupMemberAllocation::create([
            'client_id' => 5,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 4

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 4

        ]);

        GroupMemberAllocation::create([
            'client_id' => 4,
            'client' => 'Kalimwenjuma Nelson',
            'amount' => 50000,
            'loan_id' => 4

        ]);
    }
}
