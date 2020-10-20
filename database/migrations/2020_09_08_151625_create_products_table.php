<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoryId')->index()->nullable();
            $table->unsignedBigInteger('productImgId')->index()->nullable();
            $table->unsignedBigInteger('styleId')->index()->nullable();
            $table->unsignedBigInteger('brandId')->index()->nullable();
            $table->string('name',255);
            $table->integer('price');
            $table->integer('amount');
            $table->integer('salePrice')->nullable();
            $table->text('description')->nullable();
            $table->integer('rating')->nullable();
            $table->text('detail')->nullable();
            $table->text('reviews')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
