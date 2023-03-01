<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->integer("tel");
            $table->date("birthday");
            $table->string("password");
            $table->tinyInteger("pin");
            $table->unsignedBigInteger("national_id")->unique();
            $table->string("image_face")->nullable();
            $table->string("image_id_1")->nullable();
            $table->string("image_id_2")->nullable();
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
        Schema::dropIfExists('users');
    }
}
