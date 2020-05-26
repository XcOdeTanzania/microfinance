<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role = Role::where('id', 1);
        // //  factory(App\User::class, 5)->create()->roles()->attach($role);

        $user = User::create([
        'name' => 'John',
        'email' => 'me@m.com',
        'email_verified_at' => now(),
        'password' => Hash::make("password"), // password
        'remember_token' => Str::random(10),
        'branch_id' => 1
        ]);

        $role = Role::where('id', 1)->get();
        $user->roles()->attach($role);

        $user = User::create([
            'name' => 'Kim',
            'email' => 'mi@m.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
            'branch_id' => 1
            ]);
    
        $role = Role::where('id', 1)->get();
        $user->roles()->attach($role);


        $user = User::create([
            'name' => 'lyo',
            'email' => 'mr@m.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
            'branch_id' => 1
            ]);

        $role = Role::where('id', 1)->get();
        $user->roles()->attach($role);

        $user = User::create([
            'name' => 'Mee',
            'email' => 'mt@m.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
            'branch_id' => 1
            ]);
    
        $role = Role::where('id', 1)->get();
        $user->roles()->attach($role);
    }
}
