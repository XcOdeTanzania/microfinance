<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');

            ///loan terms
            $table->integer('product_id');
            $table->double('amount');
            $table->string('status');
            $table->double('interest');
            $table->integer('duration');
            $table->double('amount_refund_per_month');
            $table->date('repayment_start_date')->nullable();
            $table->date('repayment_end_date')->nullable();
            $table->date('disbursement_date')->nullable();
            $table->integer('account_id')->nullable();
            $table->integer('user_id');
            $table->integer('client_id');
            $table->integer('group_loan_id')->nullable();
            $table->string('loan_form')->nullable();

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
        Schema::dropIfExists('loans');
    }
}
