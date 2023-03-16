<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLoan extends Migration
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
            $table->integer("money_amount");
            $table->date("date_loan_money");
            $table->date("date_return_money");
            $table->boolean("status_loan");
            $table->string("image_loan1");
            $table->string("image_loan2");
            $table->string("interest");
            $table->foreign("account_id")->references("id")->on("accounts");
            $table->date("date_created_loan");
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
