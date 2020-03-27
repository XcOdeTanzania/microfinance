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

            $table->integer('user_id');
            $table->string('name');
            $table->string('account_number')->nullable();
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('group_id')->nullable();
            $table->integer('branch_id');
            $table->date('registration_date');
            $table->boolean('terms_and_conditions');

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
