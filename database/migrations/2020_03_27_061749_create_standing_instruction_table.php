<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandingInstructionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standing_instruction', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('from_client');
            $table->string('from_account_number');
            $table->string('to_client');
            $table->string('to_account_number');
            $table->bigInteger('loan_id');

            $table->softDeletes();
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
        Schema::dropIfExists('standing_instruction');
    }
}
