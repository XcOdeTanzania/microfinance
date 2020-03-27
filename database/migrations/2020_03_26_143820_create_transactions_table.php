<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
      
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('loan_id');
            $table->date('date');
            $table->date('submitted_on');
            $table->string('transaction_type');
            $table->integer('transaction_id');
            $table->double('debit');
            $table->double('credit');
            $table->double('balance');
            $table->string('payment_details');

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
        Schema::dropIfExists('transactions');
    }
}
