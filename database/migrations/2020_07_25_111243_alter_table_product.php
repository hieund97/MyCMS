<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->after('detail')->comment('0: Đang chờ, 1: Đã duyệt');
            $table->integer('quantity')->default(0)->change();
            $table->date('day_created')->after('highlight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn('status')->change();
            $table->dropColumn('day_created')->change();
            $table->integer('quantity')->nullable()->change();
        });
    }
}
