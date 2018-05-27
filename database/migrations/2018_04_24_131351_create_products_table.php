<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id')->nullable();
            $table->integer('manufacture_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('thumbnail')->nullable(); 
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('origin_price')->nullable();
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
        Schema::dropIfExists('products');
    }
}
