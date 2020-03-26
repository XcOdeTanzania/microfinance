<?php

use App\LoanStatus;
use Illuminate\Database\Seeder;

class LoanStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanStatus::create([

            'name' => "Overpaid Loans",

        ]);
        LoanStatus::create([

            'name' => "Pending Approval",

        ]);

        LoanStatus::create([

            'name' => "Pending Second Approval",

        ]);

        LoanStatus::create([

            'name' => "Awaiting Disbursement",

        ]);

        LoanStatus::create([

            'name' => "Rejected",

        ]);

        LoanStatus::create([

            'name' => "Withdrawn",

        ]);

        LoanStatus::create([

            'name' => "Written Off Loans",

        ]);

        LoanStatus::create([

            'name' => "Closed",

        ]);
    }
}
