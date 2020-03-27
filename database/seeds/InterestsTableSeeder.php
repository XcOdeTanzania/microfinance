<?php

use App\Interest;
use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interest::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 1
        ]);

        Interest::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 2
        ]);

        Interest::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 3
        ]);

        Interest::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 4
        ]);

        Interest::create([
            'contract' => 5000,
            'paid' => 150,
            'outstanding' => 0.0,
            'overdue' => 0.0,
            'loan_summary_id'=> 5
        ]);
    }
}
