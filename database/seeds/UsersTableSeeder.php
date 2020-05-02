<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Nyakachebwe Ronald";
        $user->email = "nyakachebwe@mail.com";
        $user->password = Hash::make("password");

        // attach role Loan Officer with id 1 to user

        $user->save();

        $user->roles()->attach(1);

        $user->update(["branch_id" => 1]);



        $user = new User();
        $user->name = "Zamzam Kanda";
        $user->email = "etv@mail.com";
        $user->password = Hash::make("password");

        // attach role Loan Officer with id 1 to user

        $user->save();

        $user->roles()->attach(1);

        $user->update(["branch_id" => 1]);



        $user = new User();
        $user->name = "Cris Rock";
        $user->email = "cris@mail.com";
        $user->password = Hash::make("password");

        // attach role Loan Officer with id 1 to user

        $user->save();

        $user->roles()->attach(1);

        $user->update(["branch_id" => 1]);


        ///////////////

        $user = new User();
        $user->name = "Ali, Ronald";
        $user->email = "ali@mail.com";
        $user->password = Hash::make("password");

        // attach role Loan Officer with id 1 to user

        $user->save();

        $user->roles()->attach(1);

        $user->update(["branch_id" => 1]);



         ///////////////

         $user = new User();
         $user->name = "oaa, Ronald";
         $user->email = "alia@mail.com";
         $user->password = Hash::make("password");

         // attach role Loan Officer with id 1 to user

         $user->save();

         $user->roles()->attach(1);

         $user->update(["branch_id" => 1]);


 ///////////////

 $user = new User();
 $user->name = "ioioi, Ronald";
 $user->email = "asssli@mail.com";
 $user->password = Hash::make("password");

 // attach role Loan Officer with id 1 to user

 $user->save();

 $user->roles()->attach(2);

 $user->update(["branch_id" => 1]);



    }
}
