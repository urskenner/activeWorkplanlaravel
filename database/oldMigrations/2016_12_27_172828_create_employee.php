<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forename');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('password');

            $table->timestamps();

            $table->integer('retail_store_id')->unsigned();
            $table->foreign('retail_store_id')->references('id')->on('retail_store');

            $table->integer('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contract');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
