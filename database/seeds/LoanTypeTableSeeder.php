<?php

use App\LoanType;
use Illuminate\Database\Seeder;

class LoanTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanType::create([

            'name' => "Single Loan Product",

        ]);
        LoanType::create([
            'name' => "Individual Loan",
        ]);
        LoanType::create([
            'name' => "Group Loan",
        ]);
    }
}
