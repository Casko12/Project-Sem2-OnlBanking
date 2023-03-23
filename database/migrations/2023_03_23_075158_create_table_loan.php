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
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("banglaivay_id");
            $table->integer("amount");
            $table->timestamp("date_end");
            $table->tinyInteger("status")->default(2);
            $table->float("period");
            $table->string("image_loan1");
            $table->string("image_loan2");
            $table->string("description");
            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("banglaivay_id")->references("id")->on("banglaivays");
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
