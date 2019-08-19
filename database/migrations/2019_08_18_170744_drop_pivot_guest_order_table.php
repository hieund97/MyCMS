<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPivotGuestOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest_order_pivot', function (Blueprint $table) {
            $table->dropForeign('guest_order_pivot_guest_id_foreign');
            $table->dropForeign('guest_order_pivot_order_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_order_pivot');
    }
}
