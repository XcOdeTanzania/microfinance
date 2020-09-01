<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('name');
            $table->double('interest_rate');
            $table->double('loan_application_fee_rate');
            $table->double('loan_agreement_contract_fee_rate');
            $table->double('penalty_for_late_payment_rate');
            $table->double('loan_guarantee_fund_rate');
            $table->double('insurance_fund_rate');
            $table->double('minimum_amount');
            $table->double('maximum_amount');
            $table->string('increment_per_cycle');

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
        Schema::dropIfExists('products');
    }
}
