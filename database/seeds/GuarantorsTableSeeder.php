<?php

use Illuminate\Database\Seeder;

class GuarantorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Guarantor::class, 30)->create();
    }
}
