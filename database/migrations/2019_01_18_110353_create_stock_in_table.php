<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_in', function (Blueprint $table) {
            $table->increments('id');
            $table->double('startSerial', 8, 2)->nullable();
            $table->double('endSerial', 8, 2)->nullable();
            $table->double('totalMarksheet', 8, 2)->nullable();
            $table->double('remarks_serial_no', 8, 2)->nullable();
            $table->unsignedInteger('remarks')->references('id')->on('stock_remarks')->nullable();
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
        Schema::dropIfExists('stock_in');
    }
}
