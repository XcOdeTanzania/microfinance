<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender');
            $table->string('phone_number_one');
            $table->string('phone_number_two')->nullable();
            $table->date('date_of_birth');
            $table->string('tags');
            $table->string('town');
            $table->string('postal_address');
            $table->string('marital_status');
            $table->integer('district_id');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('email')->nullable();
            
            $table->integer('profileable_id');
            $table->string('profileable_type');

            $table->softdeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
