<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Task::create([
            'user_id'=> 1,
            'branch_id' => 1,
             'group_id'=>1,
           'entity'=>'group',
           'action'=>'created',
           'submittedondate'=>'2020-02-16',
           'effectivedate'=>'2020-02-16'

        ]);

        Task::create([
            'user_id'=> 2,
            'branch_id' => 2,
             'group_id'=>2,
           'entity'=>'group',
           'action'=>'created',
           'submittedondate'=>'2020-02-16',
           'effectivedate'=>'2020-02-16'

        ]);

        Task::create([
            'user_id'=> 3,
            'branch_id' => 3,
             'group_id'=>3,
           'entity'=>'group',
           'action'=>'created',
           'submittedondate'=>'2020-02-16',
           'effectivedate'=>'2020-02-16'

        ]);

        Task::create([
            'user_id'=> 1,
            'branch_id' => 1,
             'group_id'=>1,
           'entity'=>'group',
           'action'=>'created',
           'submittedondate'=>'2020-02-16',
           'effectivedate'=>'2020-02-16'

        ]);
    }
}
