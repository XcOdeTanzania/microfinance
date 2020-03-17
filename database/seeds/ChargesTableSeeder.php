<?php

use App\Charge;
use Illuminate\Database\Seeder;

class ChargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $charge = new Charge();
        $charge->name = 'Late Payment Fee';
        $charge->type = '';
        $charge->amount = '500';
        $charge->collected_on = 'disbursement';
        $charge->date = new DateTime('now');
        $charge->payment_mode = 'Cash';
        $charge->save();

        $charge = new Charge();
        $charge->name = 'Application Fee';
        $charge->type = 'Flat';
        $charge->amount = '2000';
        $charge->collected_on = 'submitted';
        $charge->date = new DateTime('now');
        $charge->payment_mode = 'Cash';
        $charge->save();

        $charge = new Charge();
        $charge->name = 'Loan Account fee';
        $charge->type = 'Normal';
        $charge->amount = '1300';
        $charge->collected_on = 'disbursement';
        $charge->date = new DateTime('now');
        $charge->payment_mode = 'Cash';
        $charge->save();

    }
}
