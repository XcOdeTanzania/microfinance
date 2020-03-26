<?php

use App\Loan;
use Illuminate\Database\Seeder;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $loan  =Loan::create([

            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 1,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 1,
            'loanable_type' => 'App\Client'
        ]);

        $loan->guarantors()->attach(2);

      $loan = Loan::create([

            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 2,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Client'
            
        ]);
        $loan->guarantors()->attach(2);

        $loan = Loan::create([
            'loan_type_id' => 3,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 1,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 3,
            'loanable_type' => 'App\Client'
        ]);

        $loan->guarantors()->attach(4);

        $loan = Loan::create([

            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 3,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 1,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(3);

       $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 3,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 4,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 4,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 3,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 6,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 5,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 2,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 5,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 6,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 7,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 7,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 8,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(3);

        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 8,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(1);


        $loan =  Loan::create([
            'loan_type_id' => 1,
            'top_up' => 20000,
            'amount' => 3000,
            'loan_status_id'=> 8,
            'loan_status_date'=> "2020-03-25",
            'orign_of_fund' => 'orign_of_fund',
            'loan_term' => 'loan_term',
            'repayment_frequency_type' => 'repayment_frequency_type',
            'repayment_frequency_number' => 2,
            'interest_rate' => 2.0,
            'disbursement_date' => '2020-01-29',
            'grace_on_principal_payment' => 1200,
            'grace_on_principal_interest' => 3000,
            'loan_purpose' => 'loan_purpose',
            'auto_create_standing_instruction' => true,
            'loanable_id' => 2,
            'loanable_type' => 'App\Group'
        ]);

        $loan->guarantors()->attach(2);
    }
}
