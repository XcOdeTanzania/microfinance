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
            $table->id();
            $table->integer('user_id');
            $table->integer('loan_type_id');
            $table->double('top_up');
            $table->double('amount');
            $table->string('orign_of_fund');
            $table->string('loan_term');
            $table->string('repayment_frequency_type');
            $table->integer('repayment_frequency_number');
            $table->double('interest_rate');
            $table->date('disbursement_date');
            $table->double('grace_on_principal_payment');
            $table->double('grace_on_principal_interest');
            $table->string('loan_purpose');
            $table->boolean('auto_create_standing_instruction');
            $table->integer('loanable_id');
            $table->string('loanable_type');

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
