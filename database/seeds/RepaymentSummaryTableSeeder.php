<?php

use App\RepaymentSummary;
use Illuminate\Database\Seeder;

class RepaymentSummaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RepaymentSummary::class, 20)->create();
    }
}
