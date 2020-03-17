<?php

use App\Report;
use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Client'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Client'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Client'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Client'
        ]);

        //group reports
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Group'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Group'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Group'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Group'
        ]);

        //Saving reports
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Saving'
        ]);

        ///Loan reports
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Loan'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Loan'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Loan'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Loan'
        ]);


        //Organisation
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Company'
        ]);

        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Company'
        ]);

        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Company'
        ]);

        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Company'
        ]);

        ///Financial reports
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Finance'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Finance'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Finance'
        ]);
        Report::create([
            'name' => 'name',
            'description' => 'description',
            'reportable_id' => 1,
            'reportable_type' => 'App\Finance'
        ]);
    }
}
