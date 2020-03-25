<?php

use App\Guarantor;
use Illuminate\Database\Seeder;

class GuarantorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Guarantor seeder
     * @return void
     */
    public function run()
    {
        //

        $guarantor = new Guarantor();
        $guarantor->profile_id = 1;
        $guarantor->type = "client";
        
        $guarantor->save();

        $guarantor = new Guarantor();
        $guarantor->profile_id = 2;
        $guarantor->type = "client";
        
        $guarantor->save();



        $guarantor = new Guarantor();
        $guarantor->profile_id =3;
        $guarantor->type = "client";
        
        $guarantor->save();


        $guarantor = new Guarantor();
        $guarantor->profile_id =4;
        $guarantor->type = "client";
        
        $guarantor->save();



    }
}
