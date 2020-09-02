<?php

use App\GroupLoan;
use Illuminate\Database\Seeder;

class GroupLoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GroupLoan::class, 20)->create();
    }
}
