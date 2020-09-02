<?php

use Illuminate\Database\Seeder;

class CollectionReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CollectionReport::class, 100)->create();
    }
}
