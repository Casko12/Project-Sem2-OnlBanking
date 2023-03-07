<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransactionHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("transfer_id");
            $table->foreign("transfer_id")->references("id")->on("accounts");
            $table->unsignedBigInteger("receive_id");
            $table->foreign("receive_id")->references("id")->on("accounts");
            $table->integer("amount");
            $table->boolean("status")->default(true);
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
        Schema::dropIfExists('transaction_history');
    }
}
