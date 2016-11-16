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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description');
            $table->integer('price')->unsinged();
            $table->tinyInteger('is_new')->default(0);
            $table->tinyInteger('is_hot')->default(0);
            $table->tinyInteger('is_shipping')->default(0);
            $table->string('url_image');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('combo_sale_id')->unsigned()->nullable();
            $table->foreign('combo_sale_id')->references('id')->on('combo_sales')->onDelete('cascade');


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
