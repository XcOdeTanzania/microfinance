<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        Task::create( [
            'name'=>'qlicue',
            'action'=>'created',
            'entity'=>'group',
            'user_id'=> 1,
            'branch_id' => 1,
            'group_id'=>1,
            'amount'=>30000,
            'submitted_on_date'=>'2020-02-16',
            'effective_date'=>'2020-02-16'

        ] );

         Task::create( [
            'name'=>'digital',
            'action'=>'created',
            'entity'=>'group',
            'user_id'=> 2,
            'branch_id' => 2,
            'group_id'=>2,
            'amount'=>30000,
            'submitted_on_date'=>'2020-02-16',
            'effective_date'=>'2020-02-16'

        ] );

         Task::create( [
            'name'=>'agency',
            'action'=>'created',
            'entity'=>'group',
            'user_id'=> 3,
            'branch_id' => 3,
            'group_id'=>3,
            'amount'=>30000,
            'submitted_on_date'=>'2020-02-16',
            'effective_date'=>'2020-02-16'

        ] );

         Task::create( [
            'name'=>'limited',
            'action'=>'created',
            'entity'=>'group',
            'user_id'=> 2,
            'branch_id' => 1,
            'group_id'=>1,
            'amount'=>30000,
            'submitted_on_date'=>'2020-02-16',
            'effective_date'=>'2020-02-16'

        ] );
    }
}
