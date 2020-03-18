<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch();

        $branch->name = "Head Office";
        $branch->location = "Mwenge";
        $branch->company_id = 1;

        $branch->save();

        $branch = new Branch();

        $branch->name = "Kisutu";
        $branch->location = "Posta";
        $branch->company_id = 1;

        $branch->save();

        $branch = new Branch();

        $branch->name = "Vijana";
        $branch->location = "Kariokoo";
        $branch->company_id = 1;

        $branch->save();
    }
}
