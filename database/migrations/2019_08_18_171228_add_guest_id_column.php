<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGuestIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            $table->unsignedBigInteger('guest_id')->after('address')->nullable();
            $table->foreign('guest_id')->references('id')->on('guest')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->after('quantity')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->dropColumn('color');
            $table->dropColumn('size');
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
