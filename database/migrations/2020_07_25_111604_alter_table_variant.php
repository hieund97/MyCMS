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
        });
    }
}
