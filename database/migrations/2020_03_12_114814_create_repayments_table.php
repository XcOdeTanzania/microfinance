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
            $table->bigIncrements('id');

            $table->date('date')->nullable();
            $table->integer('days')->nullable();
            $table->date('paid_by')->nullable();
            $table->double('disbursement')->nullable();
            $table->double('principal_due')->nullable();
            $table->double('principal_balance')->nullable();
            $table->double('interest_due')->nullable();
            $table->double('fees')->nullable();
            $table->double('penalties')->nullable();
            $table->double('total_due')->nullable();
            $table->double('total_paid')->nullable();
            $table->double('total_outstanding')->nullable();

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
