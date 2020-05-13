<?php

use App\LoanStatus;
use Illuminate\Database\Seeder;

class LoanStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(LoanStatus::class, 20)->create();
      
    }
}
