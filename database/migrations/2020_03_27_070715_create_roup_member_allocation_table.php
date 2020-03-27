<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoupMemberAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_member_allocations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('client_id');
            $table->string('client');
            $table->double('amount');
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
        Schema::dropIfExists('group_member_allocation');
    }
}
