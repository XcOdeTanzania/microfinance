<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'name',
            'address' => 'address',
            'logo' => 'logo',
            'user_id' => 1
        ]);
        Company::create([
            'name' => 'name',
            'address' => 'address',
            'logo' => 'logo',
            'user_id' => 2
        ]);
        Company::create([
            'name' => 'name',
            'address' => 'address',
            'logo' => 'logo',
            'user_id' => 3
        ]);
        Company::create([
            'name' => 'name',
            'address' => 'address',
            'logo' => 'logo',
            'user_id' => 4
        ]);
    }
}
