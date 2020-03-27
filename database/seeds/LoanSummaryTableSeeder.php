<?php

use App\LoanSummary;
use Illuminate\Database\Seeder;

class LoanSummaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanSummary::create([
            'total_contract' => 25000,
            'total_paid' => 750,
            'total_outstanding' => 0.0,
            'total_overdue' => 0.0,
            'loan_id'=> 1
        ]);

        LoanSummary::create([
            'total_contract' => 25000,
            'total_paid' => 750,
            'total_outstanding' => 0.0,
            'total_overdue' => 0.0,
            'loan_id'=> 2
        ]);

        LoanSummary::create([
            'total_contract' => 25000,
            'total_paid' => 750,
            'total_outstanding' => 0.0,
            'total_overdue' => 0.0,
            'loan_id'=> 3
        ]);

        LoanSummary::create([
            'total_contract' => 25000,
            'total_paid' => 750,
            'total_outstanding' => 0.0,
            'total_overdue' => 0.0,
            'loan_id'=> 4
        ]);

        LoanSummary::create([
            'total_contract' => 25000,
            'total_paid' => 750,
            'total_outstanding' => 0.0,
            'total_overdue' => 0.0,
            'loan_id'=> 5
        ]);
    }
}
