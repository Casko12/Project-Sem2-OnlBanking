<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCreateSaving extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("account_id");
            $table->unsignedBigInteger("banglaitietkiem_id");
            $table->string("name");
            $table->integer("amount");
            $table->timestamp("date_end");
            $table->float("period");
            $table->string("description");
            $table->boolean("status")->default(true);
            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("banglaitietkiem_id")->references("id")->on("banglaitietkiems");
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
        Schema::dropIfExists('savings');
    }
}
