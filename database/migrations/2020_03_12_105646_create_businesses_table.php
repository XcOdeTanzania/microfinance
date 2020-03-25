<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('client_id');
            $table->string('name');
            $table->string('type');
            $table->date('date_of_start');
            $table->string('address');
            $table->integer('region_id');
            $table->integer('post_code');
            $table->bigInteger('business_revenue');
            $table->bigInteger('expenses');
            $table->bigInteger('net_income');

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
        Schema::dropIfExists('businesses');
    }
}
