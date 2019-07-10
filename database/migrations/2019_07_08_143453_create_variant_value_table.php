<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_value', function (Blueprint $table) {
            $table->unsignedBigInteger('variant_id');
            $table->foreign('variant_id')->references('id')->on('variant')->onDelete('cascade');
            $table->unsignedBigInteger('value_id');
            $table->foreign('value_id')->references('id')->on('values')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variant_value');
    }
}
