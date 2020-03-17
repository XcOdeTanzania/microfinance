<?php

use App\Finance;
use Illuminate\Database\Seeder;

class FinancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Finance::create([]);
        Finance::create([]);
        Finance::create([]);
        Finance::create([]);
        Finance::create([]);
    }
}
