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

            'name' => "Interest Recalculation Compounding on Principal (Daily)",

        ]);
        LoanType::create([
            'name' => "Declining - Accrual",
        ]);
        LoanType::create([
            'name' => "Normal Loan",
        ]);
        LoanType::create([
            'name' => "Flat - Cash",
        ]);
    }
}
