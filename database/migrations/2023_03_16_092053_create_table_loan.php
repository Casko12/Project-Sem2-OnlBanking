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
            $table->unsignedBigInteger("account_id");
            $table->integer("money_amount");
            $table->date("date_return_money");
            $table->tinyInteger("status_loan")->default(2);
            $table->tinyInteger("period_loan");
            $table->string("image_loan1");
            $table->string("image_loan2");
            $table->foreign("account_id")->references("id")->on("accounts");
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
