<?php

use App\LoanClassification;
use Illuminate\Database\Seeder;

class LoanClassificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanClassification::create([
            'name' => 'Unclassified'
        ]);

        LoanClassification::create([
            'name' => 'Loans especially mentioned',
            'past_due' => '31-60',
            'provision' => 5
        ]);
        LoanClassification::create([
            'name' => 'Substandard Loans',
            'past_due' => '61-90',
            'provision' => 10
        ]);
        LoanClassification::create([
            'name' => 'Doubtful',
            'past_due' => '91-180',
            'provision' => 50
        ]);
        LoanClassification::create([
            'name' => 'Loss/bad loans',
            'past_due' => '181 +',
            'provision' => 100
        ]);
    }
}
