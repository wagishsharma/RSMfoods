<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processings', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->index();
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->date('started');
            $table->date('completed');
            $table->string('batchNo');
            $table->string('certification');
            $table->string('barCodeNo');
            $table->string('dispatchedTo');
            $table->date('dispatchedOn');
            $table->text('remarks');
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
        Schema::drop('processings');
    }
}
