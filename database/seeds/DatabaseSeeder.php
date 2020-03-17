<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ContinentsTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(RegionsTableSeeder::class);
         $this->call(DistrictsTableSeeder::class);
         $this->call(BranchTableSeeder::class);
    }
}
