<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Eloquent\Softdeletes;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('loan_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('district');
            $table->string('region');
            $table->string('post_code');
            $table->string('country');
            $table->string('phone_number');
            $table->string('relationship');
            $table->string('image')->nullable();


            $table->softdeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @r
     * eturn void
     */
    public function down()
    {
        Schema::dropIfExists('guarantors');
    }
}
