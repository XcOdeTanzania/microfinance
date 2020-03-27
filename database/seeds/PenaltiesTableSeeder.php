<?php

use App\Penalty;
use Illuminate\Database\Seeder;

class PenaltiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penalty::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 1
        ]);

        Penalty::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 2
        ]);

        Penalty::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 3
        ]);

        Penalty::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 4
        ]);

        Penalty::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 5
        ]);
    }
}
