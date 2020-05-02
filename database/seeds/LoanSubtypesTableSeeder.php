<?php

use App\LoanSubtype;
use Illuminate\Database\Seeder;

class LoanSubtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanSubtype::create([
            'name' => "Flat - Cash",
            'loan_type_id'=> 1
        ]);
        LoanSubtype::create([
            'name' => "Interest Free - Cash Based",
            'loan_type_id'=> 1
        ]);
        LoanSubtype::create([
            'name' => "Declining - Accrual",
            'loan_type_id'=> 2
        ]);
        LoanSubtype::create([

            'name' => "Interest Recalculation Compounding on Principal (Daily)",
            'loan_type_id'=> 2

        ]);
 
        LoanSubtype::create([
            'name' => "Interest Recalculation Compounding on Principal (Daily)",
            'loan_type_id'=> 2
        ]);
        LoanSubtype::create([
            'name' => "Interest Recalculation equal principal",
            'loan_type_id'=> 2
        ]);

        LoanSubtype::create([
            'name' => "Declining - Interest Recalculation - In Duplum NO",
            'loan_type_id'=> 2
        ]);

        LoanSubtype::create([
            'name' => "Mobile Loan Declining - Accrual",
            'loan_type_id'=> 2
        ]);

        LoanSubtype::create([
            'name' => "Normal Loan",
            'loan_type_id'=> 3
        ]);
    }
}
