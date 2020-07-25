<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVariant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('variant', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->after('purchase')->comment('0: Đang chờ, 1: Đã duyệt, 2: Hàng hỏng hóc, 3: Hàng trả về, hàng khách hàng không nhận');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('variant', function (Blueprint $table) {
            $table->dropColumn('status')->change();
        });
    }
}
