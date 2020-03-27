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
        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>1

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>1

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>1

        ]);


        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>2

        ]);


        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>2

        ]);


        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>2

        ]);


        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>3

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>3

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>3

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>3

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>4

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>4

        ]);

        Collateral::create([
            'type' => 'Asset',
            'description' => 'A 2017 car',
            'value' => 20000,
            'loan_id'=>4

        ]);
    }
}
