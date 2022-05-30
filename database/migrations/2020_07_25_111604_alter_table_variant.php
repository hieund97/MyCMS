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
            $table->integer('purchase')->default(0)->after('product_id');
            $table->integer('quantity')->default(0)->after('product_id');
            $table->tinyInteger('status')->default(0)->after('purchase')->comment('0: Đang chờ, 1: Đã duyệt, 2: Hàng hỏng hóc, 3: Hàng trả về, hàng khách hàng không nhận');
            $table->unsignedDecimal('price_origin',15,2)->default(0)->after('id');
            $table->dropColumn('price_origin')->change();
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
            $table->dropColumn('purchase')->change();
            $table->dropColumn('quantity')->change();
            $table->dropColumn('status')->change();
        });
    }
}
