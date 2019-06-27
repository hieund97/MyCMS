<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('product_code')->nullable();
            $table->decimal('price_old')->nullable();
            $table->decimal('price_new');
            $table->string('desciption')->nullable();
            $table->text('detail')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('avatar')->nullable();
            $table->string('size')->nullable();
            $table->string('brand')->nullable();
            $table->boolean('highlight')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
