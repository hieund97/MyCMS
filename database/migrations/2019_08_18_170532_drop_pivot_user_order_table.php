<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPivotUserOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_order_pivot', function (Blueprint $table) {
            $table->dropForeign('user_order_pivot_user_id_foreign');
            $table->dropForeign('user_order_pivot_order_id_foreign');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_order_pivot');
    }
}
