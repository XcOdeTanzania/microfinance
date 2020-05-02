<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('first_name');
            $table->string('email')->unique()->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('street');
            $table->string('district');
            $table->string('region');
            $table->string('marital_status');
            $table->string('password');
            $table->string('status');
            $table->integer('branch_id');

            $table->date('registration_date');
            $table->date('date_birth');
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
        Schema::dropIfExists('clients');
    }
}
