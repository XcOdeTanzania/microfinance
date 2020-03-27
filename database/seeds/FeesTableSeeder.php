<?php

use App\Fee;
use Illuminate\Database\Seeder;

class FeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fee::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 1
        ]);

        Fee::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 2
        ]);

        Fee::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 3
        ]);

        Fee::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 4
        ]);

        Fee::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 5
        ]);
    }
}
