<?php

use App\Collateral;
use Illuminate\Database\Seeder;

class CollateralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Collateral::class, 30)->create();
    }
}
