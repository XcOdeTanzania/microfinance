<?php

use App\Saving;
use Illuminate\Database\Seeder;

class SavingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saving::create([]);
        Saving::create([]);
        Saving::create([]);
        Saving::create([]);
        Saving::create([]);
    }
}
