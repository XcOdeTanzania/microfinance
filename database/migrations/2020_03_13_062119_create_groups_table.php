<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->string('name');
            $table->integer('branch_id');
            $table->integer('client_id');
            $table->string('account_number');
            $table->string('uuid');
            $table->string('status');
            $table->date('activation_date');
            $table->string('meeting_day');
            $table->string('meeting_location');
            $table->string('meeting_frequency');

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
        Schema::dropIfExists('groups');
    }
}
