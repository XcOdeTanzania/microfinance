<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Loan Officer";
        $role->description = "This is loan officer";
        $role->save();

        $role = new Role();
        $role->name = "Admin";
        $role->description = "This is System Admin";
        $role->save();
    }
}
