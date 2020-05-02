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
            $table->integer('loan_subtype_id');
            $table->integer('loan_status_id');
            $table->date('loan_status_date');
            $table->boolean('top_up')->nullable();
            $table->string('loan_to_close')->nullable();
            $table->double('loan_size')->nullable();
            $table->string('orign_of_funding')->nullable();
            $table->integer('loan_term')->nullable();
            $table->string('loan_term_type')->nullable();
            $table->integer('repayment_every')->nullable();
            $table->string('repayment_every_type')->nullable();
            $table->string('repayment_day_of_the_week')->nullable();
            $table->string('repayment_week_of_the_month')->nullable();
            $table->double('interest_rate')->nullable();
            $table->date('disbursement_date')->nullable();
            $table->double('grace_on_principal_payment')->nullable();
            $table->double('grace_on_interest_payment')->nullable();

            ////loan settings
            $table->string('loan_purpose')->nullable();
            $table->boolean('auto_create_standing_instruction')->nullable();
            $table->date('repayment_starts_from')->nullable();
            $table->string('loan_sector')->nullable();
            $table->string('channel')->nullable();

            

            $table->integer('loan_cycle')->nullable();
            $table->integer('timely_repayments')->nullable();
            $table->double('amount_in_arrears')->nullable();
            $table->integer('days_in_arrears')->nullable();
            $table->string('last_payment')->nullable();
            $table->string('next_payment')->nullable();
            $table->date('final_payment_expected')->nullable();

            $table->double('annual_percentage_rate')->nullable();
            $table->double('effective_interest_rate')->nullable();
         
            
            $table->double('collateral_value')->nullable();

            $table->integer('loanable_id')->nullable();
            $table->string('loanable_type')->nullable();

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
