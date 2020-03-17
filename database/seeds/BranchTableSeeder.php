<?php

use App\Branch;
use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $branch = new Branch();
        $branch->name = 'Main Branch';
        $branch->location = 'Head Quater';
        $branch->company_id = 1;
    }
}
