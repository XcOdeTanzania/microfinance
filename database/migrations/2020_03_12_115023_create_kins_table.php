<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Eloquent\Softdeletes;

class CreateKinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id');
            
            $table->string('name');
            $table->string('address');
            $table->date('date_of_birth');
            $table->string('district');
            $table->string('region');
            $table->string('phone_number');
            $table->string('image')->nullable();
            $table->string('relationship');

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
        Schema::dropIfExists('kin');
    }
}
