<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repayments', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date');
            $table->integer('days');
            $table->string('paid_by');
            $table->double('disbursement');
            $table->double('principal_due');
            $table->double('principal_balance');
            $table->double('interest_due');
            $table->double('fee');
            $table->double('penalties');
            $table->double('expected_saving');
            $table->double('actual_saving');
            $table->double('total_paid');
            $table->double('total_outstanding');
            $table->bigInteger('loan_id');

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
        Schema::dropIfExists('repayments');
    }
}
