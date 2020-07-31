<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProductBack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_back', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->after('variant_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_back', function (Blueprint $table) {
            $table->dropColumn('order_id');
        });
    }
}
