<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('user_id')->index();
            $table->string('item');
            $table->string('varietySeed');
            $table->date('harvestedDate');
            $table->date('ReceivedDate');
            $table->string('ReceivedFrom');
            $table->string('LotNo');
            $table->string('certification');
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
        Schema::drop('receipts');
    }
}
