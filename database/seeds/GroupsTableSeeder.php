<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'group 1',
            'branch_id' => 1,
            'account_number' => 'account_number',
            'uuid' => 'uuid',
            'status' => 'approved',
            'activation_date' => '2020-02-16',
            'meeting_day' => 2,
            'meeting_location' => 'meeting_location',
            'meeting_frequency' => 'meeting_frequency'

        ]);

        Group::create([
            'name' => 'group 2',
            'branch_id' => 1,
            'account_number' => 'account_number',
            'uuid' => 'uuid',
            'status' => 'closed',
            'activation_date' => '2020-02-16',
            'meeting_day' => 2,
            'meeting_location' => 'meeting_location',
            'meeting_frequency' => 'meeting_frequency'

        ]);
        Group::create([
            'name' => 'group 3',
            'branch_id' => 1,
            'account_number' => 'account_number',
            'uuid' => 'uuid',
            'status' => 'pendingApproval',
            'activation_date' => '2020-02-16',
            'meeting_day' => 2,
            'meeting_location' => 'meeting_location',
            'meeting_frequency' => 'meeting_frequency'

        ]);
        Group::create([
            'name' => 'group 4',
            'branch_id' => 1,
            'account_number' => 'account_number',
            'uuid' => 'uuid',
            'status' => 'approved',
            'activation_date' => '2020-02-16',
            'meeting_day' => 2,
            'meeting_location' => 'meeting_location',
            'meeting_frequency' => 'meeting_frequency'

        ]);
    }
}
