<?php

use Illuminate\Database\Seeder;

class KinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Kin::class, 30)->create();
    }
}
