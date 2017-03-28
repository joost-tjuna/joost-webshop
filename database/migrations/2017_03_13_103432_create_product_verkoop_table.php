<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVerkoopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_verkoop', function (Blueprint $table) {
            $table->integer('verkoop_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('verkoop_id')->references('id')->on('verkoop');
            $table->foreign('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_verkoop');
    }
}
