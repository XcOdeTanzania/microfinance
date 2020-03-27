<?php

use App\Principal;
use Illuminate\Database\Seeder;

class PrincipalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Principal::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 1
        ]);

        Principal::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 2
        ]);

        Principal::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 3
        ]);

        Principal::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 4
        ]);

        Principal::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 5
        ]);
    }
}
