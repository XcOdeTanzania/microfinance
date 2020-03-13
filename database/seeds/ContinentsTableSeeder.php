<?php

use App\Continent;
use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continent = new Continent();
        $continent->name = 'Africa';
        $continent->save();

        $continent = new Continent();
        $continent->name = 'Antarctica';
        $continent->save();

        $continent = new Continent();
        $continent->name = 'Asia';
        $continent->save();

        $continent = new Continent();
        $continent->name = 'Australia';
        $continent->save();


        $continent = new Continent();
        $continent->name = 'Europe';
        $continent->save();

        $continent = new Continent();
        $continent->name = 'North America';
        $continent->save();


        $continent = new Continent();
        $continent->name = 'South America';
        $continent->save();
    }
}
