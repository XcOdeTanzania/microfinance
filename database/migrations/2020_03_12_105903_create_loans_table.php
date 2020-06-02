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
            $table->integer('loan_type_id');
            $table->string('status');
            $table->double('amount')->nullable();
            $table->string('orign_of_funding')->nullable();
            $table->integer('duration')->nullable();
            $table->string('repayment_every')->nullable();
            $table->string('repayment_every_type')->nullable();
            $table->date('disbursement_date')->nullable();
            $table->integer('grace_on_principal_payment')->nullable();
            $table->integer('grace_on_interest_payment')->nullable();            

            ////loan settings
            $table->string('purpose')->nullable();
            $table->boolean('auto_create_standing_instruction')->nullable();
            $table->date('repayment_start_date')->nullable();
            $table->date('repayment_end_date')->nullable();
            $table->string('sector')->nullable();
            $table->string('channel')->nullable();

            $table->integer('loanable_id')->nullable();
            $table->string('loanable_type')->nullable();
            $table->bigInteger('user_id')->nullable();

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
