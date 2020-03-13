<?php

use App\District;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        *Seeding Arusha districts............
        */
        $district = new District();
        $district->name = 'Arusha';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Arusha City Council';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Karatu';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Longido';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Meru';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Monduli';
        $district->region_id = '1';
        $district->save();

        $district = new District();
        $district->name = 'Ngorongoro';
        $district->region_id = '1';
        $district->save();


        /*
         *Seeding Dar Es Salaam districts
         */
        $district = new District();
        $district->name = 'Ilala';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Kigamboni';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Kinondoni';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Temeke';
        $district->region_id = '2';
        $district->save();

        $district = new District();
        $district->name = 'Ubungo';
        $district->region_id = '2';
        $district->save();


        /*
         *Seeding Dodoma districts
         */
        $district = new District();
        $district->name = 'Bahi';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Chamwino';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Chemba';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Dodoma';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Kondoa';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Kongwa';
        $district->region_id = '3';
        $district->save();

        $district = new District();
        $district->name = 'Mpwapwa';
        $district->region_id = '3';
        $district->save();


        /*
         *Seeding Geita districts
         */

        $district = new District();
        $district->name = 'Bukombe';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Chato';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Geita Town';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Mbogwe';
        $district->region_id = '4';
        $district->save();

        $district = new District();
        $district->name = 'Nyang\'hwale';
        $district->region_id = '4';
        $district->save();


        /*
         *Seeding Iringa districts
         */

        $district = new District();
        $district->name = 'Iringa';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Iringa Municipal';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Kilolo';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Mafinga';
        $district->region_id = '5';
        $district->save();

        $district = new District();
        $district->name = 'Mufindi';
        $district->region_id = '5';
        $district->save();


        /*
        *Seeding Kagera districts
        */
        $district = new District();
        $district->name = 'Biharamulo';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Bukoba';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Bukoba Municipal';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Karagwe';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Kyerwa';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Missenyi';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Muleba';
        $district->region_id = '6';
        $district->save();

        $district = new District();
        $district->name = 'Ngara';
        $district->region_id = '6';
        $district->save();

        /*
         *Seeding Katavi districts
         */
        $district = new District();
        $district->name = 'Mlele';
        $district->region_id = '7';
        $district->save();

        $district = new District();
        $district->name = 'Mpanda';
        $district->region_id = '7';
        $district->save();

        $district = new District();
        $district->name = 'Mpanda Town';
        $district->region_id = '7';
        $district->save();

        /*
         *Seeding Kigoma districts
         */

        $district = new District();
        $district->name = 'Buhigwe';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kakonko';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kasulu';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kasulu Town';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kibondo';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kigoma District';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Kigoma-Ujiji';
        $district->region_id = '8';
        $district->save();

        $district = new District();
        $district->name = 'Uvinza';
        $district->region_id = '8';
        $district->save();


        /*
        *Seeding Kilimanjaro districts
        */

        $district = new District();
        $district->name = 'Hai';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Moshi';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Moshi';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Mwanga';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Rombo';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Same';
        $district->region_id = '9';
        $district->save();

        $district = new District();
        $district->name = 'Siha';
        $district->region_id = '9';
        $district->save();


        /*
        *Seeding Lindi districts
        */
        $district = new District();
        $district->name = 'Kilwa';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Lindi District';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Lindi Municipal';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Liwale';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Nachingwea';
        $district->region_id = '10';
        $district->save();

        $district = new District();
        $district->name = 'Ruangwa';
        $district->region_id = '10';
        $district->save();

        /*
        *Seeding Manyara districts
        */

        $district = new District();
        $district->name = 'Babati Town';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Babati';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Hanang';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Kiteto';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Mbulu';
        $district->region_id = '11';
        $district->save();

        $district = new District();
        $district->name = 'Simanjiro';
        $district->region_id = '11';
        $district->save();

        /*
         *Seeding Mara Districts..........
         */

        $district = new District();
        $district->name = 'Bunda';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Butiama';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Musoma';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Musoma Municipal';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Rorya';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Serengeti';
        $district->region_id = '12';
        $district->save();

        $district = new District();
        $district->name = 'Tarime';
        $district->region_id = '12';
        $district->save();

        /*
        *Seeding Mbeya Districts..........
        */

        $district = new District();
        $district->name = 'Busokelo';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Chunya';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Kyela';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbarali';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbeya City';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Mbeya District';
        $district->region_id = '13';
        $district->save();

        $district = new District();
        $district->name = 'Rungwe';
        $district->region_id = '13';
        $district->save();


        /*
        *Seeding Morogoro Districts..........
        */
        $district = new District();
        $district->name = 'Gairo';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Kilombero';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Kilosa';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Morogoro District';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Morogoro Municipal';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Mvomero';
        $district->region_id = '14';
        $district->save();

        $district = new District();
        $district->name = 'Ulanga';
        $district->region_id = '14';
        $district->save();


        /*
        *Seeding Mtwara Districts..........
        */
        $district = new District();
        $district->name = 'Masasi';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Masasi Town';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Mtwara District';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Mtwara Municipal';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Nanyumbu';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Newala';
        $district->region_id = '15';
        $district->save();

        $district = new District();
        $district->name = 'Tandahimba';
        $district->region_id = '15';
        $district->save();

        /*
        *Seeding Mwanza Districts..........
        */
        $district = new District();
        $district->name = 'Ilemela';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Kwimba';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Magu';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Misungwi';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Nyamagana';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Sengerema';
        $district->region_id = '16';
        $district->save();

        $district = new District();
        $district->name = 'Ukerewe';
        $district->region_id = '16';
        $district->save();

        /*
        *Seeding Njombe Districts..........
        */
        $district = new District();
        $district->name = 'Ludewa';
        $district->region_id = '17';
        $district->save();

        $district = new District();
        $district->name = 'Makambako';
        $district->region_id = '17';
        $district->save();

        $district = new District();
        $district->name = 'Makete';
        $district->region_id = '17';
        $district->save();

        $district = new District();
        $district->name = 'Njombe District';
        $district->region_id = '17';
        $district->save();

        $district = new District();
        $district->name = 'Njombe Town';
        $district->region_id = '17';
        $district->save();

        $district = new District();
        $district->name = 'Wanging\'ombe';
        $district->region_id = '17';
        $district->save();


        /*
        *Seeding Pemba North Districts..........
        */
        $district = new District();
        $district->name = 'Micheweni';
        $district->region_id = '18';
        $district->save();

        $district = new District();
        $district->name = 'Wete';
        $district->region_id = '18';
        $district->save();

        /*
       *Seeding Pemba South Districts..........
       */
        $district = new District();
        $district->name = 'Chake Chake';
        $district->region_id = '19';
        $district->save();

        $district = new District();
        $district->name = 'Mkoani';
        $district->region_id = '19';
        $district->save();

        /*
       *Seeding Pwani Districts..........
       */
        $district = new District();
        $district->name = 'Bagamoyo';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Kibaha District';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Kibaha Town';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Kisarawe';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Mafia';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Mkuranga';
        $district->region_id = '20';
        $district->save();

        $district = new District();
        $district->name = 'Rufiji';
        $district->region_id = '20';
        $district->save();

        /*
        *Seeding Rukwa  Districts..........
        */
        $district = new District();
        $district->name = 'Kalambo';
        $district->region_id = '21';
        $district->save();

        $district = new District();
        $district->name = 'Nkasi';
        $district->region_id = '21';
        $district->save();

        $district = new District();
        $district->name = 'Sumbawanga';
        $district->region_id = '21';
        $district->save();

        $district = new District();
        $district->name = 'Sumbawanga Municipal';
        $district->region_id = '21';
        $district->save();

        /*
        *Seeding Ruvuma Districts..........
        */
        $district = new District();
        $district->name = 'Mbinga';
        $district->region_id = '22';
        $district->save();

        $district = new District();
        $district->name = 'Songea';
        $district->region_id = '22';
        $district->save();

        $district = new District();
        $district->name = 'Songea Municipal';
        $district->region_id = '22';
        $district->save();

        $district = new District();
        $district->name = 'Tunduru';
        $district->region_id = '22';
        $district->save();

        $district = new District();
        $district->name = 'Namtumbo';
        $district->region_id = '22';
        $district->save();


        $district = new District();
        $district->name = 'Nyasa';
        $district->region_id = '22';
        $district->save();


        /*
         *Seeding Shinyanga Districts..........
        */
        $district = new District();
        $district->name = 'Kahama';
        $district->region_id = '23';
        $district->save();

        $district = new District();
        $district->name = 'Kahama Town';
        $district->region_id = '23';
        $district->save();

        $district = new District();
        $district->name = 'Kishapu';
        $district->region_id = '23';
        $district->save();

        $district = new District();
        $district->name = 'Shinyanga District';
        $district->region_id = '23';
        $district->save();

        $district = new District();
        $district->name = 'Shinyanga Municipal';
        $district->region_id = '23';
        $district->save();


        /*
         *Seeding Simiyu Districts..........
        */
        $district = new District();
        $district->name = 'Bariadi';
        $district->region_id = '24';
        $district->save();

        $district = new District();
        $district->name = 'Busega';
        $district->region_id = '24';
        $district->save();

        $district = new District();
        $district->name = 'Itilima';
        $district->region_id = '24';
        $district->save();

        $district = new District();
        $district->name = 'Maswa';
        $district->region_id = '24';
        $district->save();

        $district = new District();
        $district->name = 'Meatu';
        $district->region_id = '24';
        $district->save();

        /*
        *Seeding Singida Districts..........
       */
        $district = new District();
        $district->name = 'Ikungi';
        $district->region_id = '25';
        $district->save();

        $district = new District();
        $district->name = 'Iramba';
        $district->region_id = '25';
        $district->save();

        $district = new District();
        $district->name = 'Manyoni';
        $district->region_id = '25';
        $district->save();

        $district = new District();
        $district->name = 'Mkalama';
        $district->region_id = '25';
        $district->save();

        $district = new District();
        $district->name = 'Singida District';
        $district->region_id = '25';
        $district->save();

        $district = new District();
        $district->name = 'Singida Municipal';
        $district->region_id = '25';
        $district->save();

        /*
         *Seeding Sogwe Districts..........
        */
        $district = new District();
        $district->name = 'Ileje';
        $district->region_id = '26';
        $district->save();

        $district = new District();
        $district->name = 'Mbozi';
        $district->region_id = '26';
        $district->save();

        $district = new District();
        $district->name = 'Mbozi';
        $district->region_id = '26';
        $district->save();

        $district = new District();
        $district->name = 'Mbomba';
        $district->region_id = '26';
        $district->save();

        $district = new District();
        $district->name = 'Songwe';
        $district->region_id = '26';
        $district->save();


        /*
         *Seeding Tabora Districts..........
        */
        $district = new District();
        $district->name = 'Igunga';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Kaliua';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Nzega';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Sikonge';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Tabora Municipal';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Urambo';
        $district->region_id = '27';
        $district->save();

        $district = new District();
        $district->name = 'Uyui';
        $district->region_id = '27';
        $district->save();


        /*
         *Seeding Tanga Districts..........
        */
        $district = new District();
        $district->name = 'Handeni';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Handeni Town';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Kilindi';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Korogwe';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Korogwe Town';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Lushoto';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Muheza';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Mkinga';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Pangani';
        $district->region_id = '28';
        $district->save();

        $district = new District();
        $district->name = 'Tanga City';
        $district->region_id = '28';
        $district->save();


        /*
         *Seeding Zanzibar North Districts..........
        */
        $district = new District();
        $district->name = 'Kaskazini A';
        $district->region_id = '29';
        $district->save();


        $district = new District();
        $district->name = 'Kaskazini B';
        $district->region_id = '29';
        $district->save();


        /*
         *Seeding Zanzibar South Districts..........
        */
        $district = new District();
        $district->name = 'kati';
        $district->region_id = '30';
        $district->save();

        $district = new District();
        $district->name = 'Kusini';
        $district->region_id = '30';
        $district->save();

        /*
        *Seeding Zanzibar South Districts..........
       */
        $district = new District();
        $district->name = 'Magharibi';
        $district->region_id = '31';
        $district->save();

        $district = new District();
        $district->name = 'Mjini';
        $district->region_id = '31';
        $district->save();
    }
}
