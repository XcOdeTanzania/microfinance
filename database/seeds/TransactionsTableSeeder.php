<?php

use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Charges At Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 1
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 1
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Repayment",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 1
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest Applied",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 1
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest not accrued yet",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 1
        ]);


        //////
        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Charges At Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 2
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 2
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Repayment",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 2
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest Applied",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 2
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest not accrued yet",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 2
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Charges At Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 3
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 4
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Repayment",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 13
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest Applied",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 14
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest not accrued yet",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 10
        ]);


        ////
        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Charges At Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 3
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Disbursement",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 9
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Repayment",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 7
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest Applied",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 6
        ]);

        Transaction::create([
            'date' => "2020-01-12",
            'submitted_on' => "2020-06-12",
            'transaction_type' => "Interest not accrued yet",
            'transaction_id' => 230,
            'debit' => 0.00,
            'credit' => 3000,
            'balance' => 50000,
            'payment_details' => "payment details",
            'loan_id' => 5
        ]);


///
Transaction::create([
    'date' => "2020-01-12",
    'submitted_on' => "2020-06-12",
    'transaction_type' => "Charges At Disbursement",
    'transaction_id' => 230,
    'debit' => 0.00,
    'credit' => 3000,
    'balance' => 50000,
    'payment_details' => "payment details",
    'loan_id' => 18
]);

Transaction::create([
    'date' => "2020-01-12",
    'submitted_on' => "2020-06-12",
    'transaction_type' => "Disbursement",
    'transaction_id' => 230,
    'debit' => 0.00,
    'credit' => 3000,
    'balance' => 50000,
    'payment_details' => "payment details",
    'loan_id' => 17
]);

Transaction::create([
    'date' => "2020-01-12",
    'submitted_on' => "2020-06-12",
    'transaction_type' => "Repayment",
    'transaction_id' => 230,
    'debit' => 0.00,
    'credit' => 3000,
    'balance' => 50000,
    'payment_details' => "payment details",
    'loan_id' => 15
]);

Transaction::create([
    'date' => "2020-01-12",
    'submitted_on' => "2020-06-12",
    'transaction_type' => "Interest Applied",
    'transaction_id' => 230,
    'debit' => 0.00,
    'credit' => 3000,
    'balance' => 50000,
    'payment_details' => "payment details",
    'loan_id' => 11
]);

Transaction::create([
    'date' => "2020-01-12",
    'submitted_on' => "2020-06-12",
    'transaction_type' => "Interest not accrued yet",
    'transaction_id' => 230,
    'debit' => 0.00,
    'credit' => 3000,
    'balance' => 50000,
    'payment_details' => "payment details",
    'loan_id' => 12
]);

        
    }
}
