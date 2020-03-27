<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_summary', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('loan_id');
            $table->double('total_contract');
            $table->double('total_paid');
            $table->double('total_outstanding');
            $table->double('total_overdue');

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
        Schema::dropIfExists('loan_summary');
    }
}
