<?php

use Illuminate\Database\Seeder;

class GuardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Guard::class, 10)->create();
    }
}
