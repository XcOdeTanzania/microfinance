<?php

use Illuminate\Database\Seeder;

class IdentificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Identification::class, 30)->create();
    }
}
