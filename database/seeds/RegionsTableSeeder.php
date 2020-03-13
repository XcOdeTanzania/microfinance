<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        * seeding Tanzanian regions...........
        */

        $region = new Region();
        $region->name = 'Arusha';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Dar es Salaam';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Dodoma';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Geita';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Iringa';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Kagera';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Katavi';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Kigoma';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Kilimanjaro';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Lindi';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Manyara';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Mara';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Mbeya';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Morogoro';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Mtwara';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Mwanza';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Njombe';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Pemba';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Pemba South';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Pwani';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Rukwa';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Ruvuma';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Shinyanga';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Simiyu';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Singida';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Songwe';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Tabora';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Tanga';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Zanzibar North';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Zanzibar South';
        $region->country_id = '49';
        $region->save();

        $region = new Region();
        $region->name = 'Zanzibar Urban West';
        $region->country_id = '49';
        $region->save();

    }
}
