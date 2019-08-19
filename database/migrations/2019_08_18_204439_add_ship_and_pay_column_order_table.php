<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShipAndPayColumnOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->unsignedBigInteger('pay_id')->after('address')->nullable();
            $table->foreign('pay_id')->references('id')->on('payment_method')->onDelete('cascade');
            $table->unsignedBigInteger('ship_id')->after('address')->nullable();
            $table->foreign('ship_id')->references('id')->on('ship_method')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
