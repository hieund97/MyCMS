<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sale', function (Blueprint $table) {
            $table->dropColumn('size');
            $table->dropColumn('color');
            $table->renameColumn('sale', 'percent_sale');
            $table->string('code_sale')->after('product_id')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sale', function (Blueprint $table) {
            $table->bigInteger('size');
            $table->bigInteger('color');
            $table->renameColumn('percent_sale', 'sale');
            $table->dropColumn('code_sale');
        });
    }
}
