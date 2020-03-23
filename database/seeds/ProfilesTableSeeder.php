<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile-> first_name = 'Juma';
        $profile-> middle_name = 'J';
        $profile-> last_name = 'Kk';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+255';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl';
        $profile-> town = 'Mwenge';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '3';
        $profile-> email = 'm@m.com';
        $profile-> profileable_id = '1';
        $profile-> profileable_type = 'App\User';
        $profile->save();

        $profile = new Profile();
        $profile-> first_name = 'Albert';
        $profile-> middle_name = 'Stewart';
        $profile-> last_name = 'Last';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+254';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl2';
        $profile-> town = 'Ubungo';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '3';
        $profile-> email = 'a@a.com';
        $profile-> profileable_id = '2';
        $profile-> profileable_type = 'App\User';
        $profile->save();

        $profile = new Profile();
        $profile-> first_name = 'John';
        $profile-> middle_name = 'F.';
        $profile-> last_name = 'Kenedy';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+253';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl3';
        $profile-> town = 'Buza';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '5';
        $profile-> email = 'j@k.com';
        $profile-> profileable_id = '3';
        $profile-> profileable_type = 'App\User';
        $profile->save();

        $profile = new Profile();
        $profile-> first_name = 'Chris ';
        $profile-> middle_name = 'J';
        $profile-> last_name = 'Tucker';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+255';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl';
        $profile-> town = 'Mwenge';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '3';
        $profile-> email = 'cris@qlicue.com';
        $profile-> profileable_id = '1';
        $profile-> profileable_type = 'App\Client';
        $profile->save();

        $profile = new Profile();
        $profile-> first_name = 'Jackson ';
        $profile-> middle_name = 'Stewart';
        $profile-> last_name = 'Jackob';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+254';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl2';
        $profile-> town = 'Ubungo';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '3';
        $profile-> email = 'jack@gmail.com';
        $profile-> profileable_id = '2';
        $profile-> profileable_type = 'App\Client';
        $profile->save();

        $profile = new Profile();
        $profile-> first_name = 'Samuel ';
        $profile-> middle_name = 'David';
        $profile-> last_name = 'Kenedy';
        $profile-> gender = 'male';
        $profile-> phone_number_one = '+253';
        $profile-> phone_number_two = '';
        $profile-> date_of_birth = new DateTime('now');
        $profile-> tags = 'cl3';
        $profile-> town = 'Buza';
        $profile-> postal_address = '';
        $profile-> marital_status = 'single';
        $profile-> district_id = '5';
        $profile-> email = 'sam@ymail.com';
        $profile-> profileable_id = '3';
        $profile-> profileable_type = 'App\Client';
        $profile->save();
    }
}
